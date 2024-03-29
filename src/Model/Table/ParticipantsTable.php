<?php

namespace App\Model\Table;

use App\Model\Entity\Participant;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class ParticipantsTable.
 */
class ParticipantsTable extends Table
{
    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('participants');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('People', []);
        $this->belongsTo('Organizations', []);
        $this->belongsToMany('Activities', ['through' => 'ActivitiesParticipants']);
        $this->belongsToMany('Projects', ['through' => 'ParticipantsProjects']);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
            ->allowEmpty('id', 'created')
            ->add('type', 'validType', [
                'rule' => ['inList', [Participant::TYPE_PERSON, Participant::TYPE_ORGANIZATION]],
                'message' => 'The provided participant type is invalid!',
            ])
            ->notEmpty('type', __('Please provide a type for the participant!'))
            ->requirePresence('type')
            ->notEmpty('role', __('Please provide a role for the participant!'))
            ->requirePresence('role')
            ->add('role', 'validRole', [
                'rule' => ['inList', [Participant::ROLE_PANELIST, Participant::ROLE_TEAM, Participant::ROLE_MODERATOR]],
                'message' => 'The provided participant role is invalid!',
            ])
            ->requirePresence('description')
            ->notEmpty('description', __('Please provide a description for the participant!'))
            ->add('description', 'minLength', [
                'rule' => ['minLength', 50],
                'message' => 'The length of the participant description must be greater than 50.',
            ]);

        return $validator;
    }
}
