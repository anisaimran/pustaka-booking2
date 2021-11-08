
	public function cekData($where = null)
	{
		return $this->db->grt_where('user', $where);
		return $this->db->get_where('user', $where);
	}

	public function getUserWhere($where = null)