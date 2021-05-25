<?php

class M_attribute extends CI_Model
{
	protected $_table = 'attribute';

	/**
	 * @return mixed
	 */
	public function get()
	{
		return $this->db->get($this->_table)->result();
	}

	/**
	 * @return mixed
	 */
	public function count()
	{
		return $this->db->get($this->_table)->num_rows();
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function find($id){
		$query = $this->db->get_where($this->_table, ['id' => $id]);
		return $query->row();
	}

	/**
	 * @param $name
	 * @return mixed
	 */
	public function findByName($name){
		$query = $this->db->get_where($this->_table, ['name' => $name]);
		return $query->row();
	}

	/**
	 * @param $data
	 * @return mixed
	 */
	public function store($data)
	{
		return $this->db->insert($this->_table, $data);
	}

	/**
	 * @param $data
	 * @param $id
	 * @return mixed
	 */
	public function update($data, $id)
	{
		$query = $this->db->set($data);
		$query = $this->db->where(['id' => $id]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	/**
	 * @param $id
	 * @return mixed
	 */
	public function delete($id)
	{
		return $this->db->delete($this->_table, ['id' => $id]);
	}
}
