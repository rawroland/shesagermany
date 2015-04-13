<?php

namespace App\Model\Table;

use App\Model\Entity\Project;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class ProjectsTable.
 */
class ProjectsTable extends Table
{
    public $defaultContain = ['Participants' => ['People', 'Organizations']];
    public $defaultLimit = 5;
    public $defaultSort = ['Projects.start' => 'desc'];
    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('projects');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsToMany('Participants', []);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
            ->allowEmpty('id', 'created')
            ->notEmpty('title', 'Please provide a title for the project.')
            ->add('title', 'validLength', [
                'rule' => ['lengthBetween', 10, 128],
                'message' => 'The length of the project title must be between 10 and 128.',
            ])->requirePresence('title')
            ->notEmpty('description', 'Please provide a description for the project.')
            ->add('description', 'minLength', [
                'rule' => ['minLength', 50],
                'message' => 'The length of the project description must be greater than 50.',
            ])->requirePresence('description')
            ->notEmpty('start', 'Please provide a start date for the project.')
            ->add('start', 'validStartDate', [
                'rule' => ['date', ['dmy', 'ymd']],
                'message' => 'Please provide a valid start date. Allowed format is DD-MM-YYYY.',
            ])->requirePresence('start')
            ->notEmpty('end', 'Please provide an end date for the project.')
            ->add('end', 'validEndDate', [
                'rule' => ['date', ['dmy', 'ymd']],
                'message' => 'Please provide a valid end date. Allowed format is DD-MM-YYYY.',
            ])->requirePresence('end');

        return $validator;
    }

    /**
     * Retrieve a single project record.
     *
     * @param int   $projectId
     * @param array $parameters Additional parameters for searching.
     *
     * @return \Cake\Datasource\EntityInterface|mixed
     */
    public function getSingle($projectId, $parameters = [])
    {
        $defaultOptions = ['contain' => $this->defaultContain];
        $options = array_merge($defaultOptions, $parameters);

        return $this->get($projectId, $options);
    }

    /**
     * Sets the deleted flag of projects and its activities to true to simulate deleting.
     * Such projects will not be displayed anymore.
     *
     * @param $projectId int Project to be deleted
     *
     * @return bool|\Cake\Datasource\EntityInterface|mixed
     */
    public function customDelete($projectId)
    {
        $project = $this->getSingle($projectId);
        $project->set('deleted', 1);

        return $this->save($project);
    }
}
