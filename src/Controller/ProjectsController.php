<?php

namespace App\Controller;

use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\I18n\Time;

/**
 * Class ProjectsController.
 *
 * @property \App\Model\Table\ProjectsTable $Projects
 * @property \Cake\Controller\Component\FlashComponent $Flash
 */
class ProjectsController extends AppController
{
    public $paginate = [];

    public function initialize()
    {
        $this->paginate = [
            'contain' => $this->Projects->defaultContain, 'limit' => $this->Projects->defaultLimit,
            'order' => $this->Projects->defaultSort, 'conditions' => $this->Projects->defaultConditions,
        ];
        parent::initialize();
    }

    /**
     * Add or edit an project depending on the presence of an id.
     *
     * @param int $projectId Project id to be edited
     * @return void
     */
    public function edit($projectId = null)
    {
        $options = [
            'associated' => ['Activities' => ['associated' => ['Addresses', 'Participants' => ['associated' => ['People']]]]],
        ];
        $project = $this->Projects->newEntity();
        if (!empty($projectId)) {
            $project = $this->Projects->getSingle($projectId);
        }
        if ($this->request->is(['post', 'put', 'patch'])) {
            $project = $this->Projects->patchEntity($project, $this->request->data(), $options);
            if ($this->Projects->save($project)) {
                $this->Flash->success('The Project was successfully saved.');

                return $this->redirect(['action' => 'index_admin']);
            }
            $this->Flash->error('The Project could not be saved. Please check the submitted data and try again.');
        }
        $this->set(compact('project'));
    }

    public function indexAdmin()
    {
        $this->set('projects', $this->paginate($this->Projects));
    }

    public function index()
    {
        $projects = $this->paginate($this->Projects);
        $this->pageTitle = __('All Projects');
        $this->set(compact('projects'));
    }

    public function running()
    {
        $this->paginate['conditions'] = array_merge($this->paginate['conditions'], ["{$this->Projects->alias()}.end >" => new Time()]);
        $projects = $this->paginate($this->Projects);
        $this->pageTitle = __('Running Projects');
        $this->view = 'index';
        $this->set(compact('projects'));
    }

    public function completed()
    {
        $this->paginate['conditions'] = array_merge($this->paginate['conditions'], ["{$this->Projects->alias()}.end <" => new Time()]);
        $projects = $this->paginate($this->Projects);
        $this->pageTitle = __('Completed Projects');
        $this->view = 'index';
        $this->set(compact('projects'));
    }

    /**
     * @param $projectId
     *
     * @return \Cake\Network\Response|void
     *
     * @todo What could go wrong so that saving fails
     */
    public function delete($projectId)
    {
        $this->autoRender = false;
        $this->request->allowMethod(['post', 'delete']);
        if (!$this->Projects->exists([$this->Projects->alias().'.'.$this->Projects->primaryKey() => $projectId])) {
            $this->Flash->error("The project with id $projectId was not found!");

            return $this->redirect($this->referer());
        }
        if ($this->Projects->customDelete($projectId)) {
            $this->Flash->success("The project with id $projectId was successfully deleted!");
        }

        return $this->redirect($this->referer());
    }

    public function view($projectId)
    {
        try {
            $project = $this->Projects->getSingle($projectId);
        } catch (RecordNotFoundException $exception) {
            $this->log("Tried to access nonexistent Project with id [{$projectId}]");
            $this->log($exception->getTraceAsString());
            $this->Flash->error('The resource you are looking for could not be found. Please try again later.');

            return $this->redirect($this->referer());
        }
        $this->pageTitle = $project->get('title');
        $this->set(compact('project'));
    }
}
