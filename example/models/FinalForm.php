<?php

namespace app\models;

use Yii;
use yii\base\Model;
use raoul2000\workflow\validation\WorkflowScenario;

/**
 * ContactForm is the model behind the contact form.
 */
class FinalForm extends Model
{
    public $rate;
    public $status;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['rate'], 'required'],
        ];
    }
    public function summary()
    {
    	return 'this is : '.$this->rate;
    }
}
