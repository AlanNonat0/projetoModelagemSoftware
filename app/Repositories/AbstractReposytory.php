<?php

namespace App\Repositories;


abstract class AbstractReposytory extends ConnectionHelppers
{
    protected $model;

     /**
     * Assigns the child's model class to the template attribute.
     */
    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    /**
     *  Returns the model class used by the child class
     *
     * @return \App\Models
     */
    protected function resolveModel()
    {
        return app($this->model);
    }

    /**
     * Return all data
     *
     * @return Collection
     */
    public function all()
    {
        if (!self::testConnection()) {
            return false;
        }

        if($this->pivot){
            return $this->model->with($this->pivot)->get();
        }

        return $this->model->all();

    }

    /**
     * Crate new register in database
     *
     * @return Collection
     */
    public function create($data)
    {
        if (self::testConnection()) {
            return $this->model->create($data);
        }

        return false;

    }

    /**
     * Returns data by id
     *
     * @return Collection
     */
    public function find(int $id)
    {
        if (!self::testConnection()) {
             return false;
        }
        
        return $this->model->find($id);

    }

    /**
     * update a register in database
     *
     * @return Collection
     */
    public function update($request, $id)
    {

        $instanceModel = $this->find($id);

        if ($instanceModel === null) {
            return null;
        }

        if (self::testConnection()) {

            $instanceModel->fill($request->all());
            $instanceModel->save();

            return $instanceModel;

        }
        return false;
    }

    /**
     * Delete data by id
     *
     * @return Collection
     */
    public function destroy(int $id)
    {
        if (self::testConnection()) {
            return $this->model->destroy($id);
        }
        return false;

    }

}