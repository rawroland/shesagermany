<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class ProjectsTableTest extends TestCase
{
    public $fixtures = [
    'Projects' => 'app.Projects',
    'Participants' => 'app.Participants',
    'People' => 'app.People',
    'Organizations' => 'app.Organizations',
    'ParticipantsProjects' => 'app.ParticipantsProjects',
  ];

  /**
   * @var ProjectsTable
   */
  public $Projects = null;

  /**
   * @var array Test data
   */
  public $data = [
    'title' => 'SHESA Germany SG7',
    'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.',
    'start' => '2015-07-11',
    'end' => '2015-07-12',
  ];

    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Projects') ? [] : ['className' => 'App\Model\Table\ProjectsTable'];
        $this->Projects = TableRegistry::get('Projects', $config);
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->Projects);
    }

    public function testValidationFailsWithEmptyData()
    {
        $project = $this->Projects->newEntity([]);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Projects->save($project), 'Project was saved without the title field.');
    }

    public function testValidationFailsWithoutTitle()
    {
        unset($this->data['title']);
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Projects->save($project), 'Project was saved without the title field.');
    }

    public function testValidationFailsWithEmptyTitle()
    {
        $this->data['title'] = '';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['_empty'];
        $expected = 'Please provide a title for the project.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with an empty title value.');
    }

    public function testValidationFailsWithShortTitle()
    {
        $this->data['title'] = 'Short';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['validLength'];
        $expected = 'The length of the project title must be between 10 and 128.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short title length.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with a short title field.');
    }

    public function testValidationFailsWithLongTitle()
    {
        $this->data['title'] = 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['validLength'];
        $expected = 'The length of the project title must be between 10 and 128.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short title length.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with a short title field.');
    }

    public function testValidationFailsWithoutDescription()
    {
        unset($this->data['description']);
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $this->assertFalse($this->Projects->save($project), 'Project was saved without the description field.');
    }

    public function testValidationFailsWithEmptyDescription()
    {
        $this->data['description'] = '';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $actual = $errors['description']['_empty'];
        $expected = 'Please provide a description for the project.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty description value.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with an empty description value.');
    }

    public function testValidationFailsWithInvalidDescriptionData()
    {
        $this->data['description'] = 'Short description';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with a short description value.');
        $actual = $errors['description']['minLength'];
        $expected = 'The length of the project description must be greater than 50.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short description length.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with a short description value.');
    }

    public function testValidationFailsWithoutStartDate()
    {
        unset($this->data['start']);
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $this->assertFalse($this->Projects->save($project), 'Project was saved without the date field.');
    }

    public function testValidationFailsWithEmptyStartDate()
    {
        $this->data['start'] = '';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $actual = $errors['start']['_empty'];
        $expected = 'Please provide a start date for the project.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty date value.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with an empty date value.');
    }

    /**
     * @todo Possible invalid date inputs.
     */
    public function testValidationFailsWithInvalidStartDateData()
    {
        $this->data['start'] = '2014';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid date value.');
        $actual = $errors['start']['validStartDate'];
        $expected = __('Please provide a valid start date. Allowed format is DD-MM-YYYY.');
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid date.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with an invalid date.');
    }

    public function testValidationFailsWithoutEndDate()
    {
        unset($this->data['start']);
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $this->assertFalse($this->Projects->save($project), 'Project was saved without the date field.');
    }

    public function testValidationFailsWithEmptyEndDate()
    {
        $this->data['end'] = '';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the end date field');
        $actual = $errors['end']['_empty'];
        $expected = 'Please provide an end date for the project.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty end date value.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with an empty end date value.');
    }

    /**
     * @todo Possible invalid date inputs.
     */
    public function testValidationFailsWithInvalidEndDateData()
    {
        $this->data['end'] = '2014';
        $project = $this->Projects->newEntity($this->data);
        $errors = $project->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid date value.');
        $actual = $errors['end']['validEndDate'];
        $expected = __('Please provide a valid end date. Allowed format is DD-MM-YYYY.');
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid end date.');
        $this->assertFalse($this->Projects->save($project), 'Project was saved with an invalid end date.');
    }

    /**
     * @expectedException \Cake\Datasource\Exception\RecordNotFoundException
     */
    public function testNonexistentProjectNotFoundForDeleting()
    {
        $this->Projects->customDelete(11);
    }

    public function testDeleteSuccessful()
    {
        $project = $this->Projects->get(1);
        $this->assertFalse($project->deleted, 'Project is deleted.');
        $this->assertTrue((bool) $this->Projects->customDelete(1));
        $project = $this->Projects->get(1);
        $this->assertTrue($project->deleted, 'Project was not deleted.');
    }
}
