<?php
namespace UiBuilder\Form\Concerns;

use GetThingsDone\Attributes\Contracts\HasCastAttributes;

trait InteractsWithModel
{

    protected HasCastAttributes $model;

    public string $modelClassname;

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        if( empty($this->model->id) && isset($value['id']) )
        {
            return (new $this->modelClassname)->firstWhere('id',$value['id']);
        }
        return $this->model ?? new $this->modelClassname;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel(HasCastAttributes $model)
    {
        $this->model = $model;
        if( !empty($model->id) )
        {
            $this->values['id'] = $model->id;
        }
        $this->modelClassname =  $this->modelClassname ?? get_class($this->model);
        return $this;
    }

    public function syncModel($id): self
    {   
        $model = $this->getModel()->firstWhere('id',$id);

        $this->setModel($model);

        return $this;
    }

    public function resetModel()
    {
        $model = new $this->modelClassname;
        $this->setModel($model);
    }
}