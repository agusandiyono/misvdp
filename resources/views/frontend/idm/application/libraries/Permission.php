<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permission extends Ion_auth
{
	protected static $userPermission;

	public function get_permission($id)
    {
        if (empty(self::$userPermission))
        {
            $this->db->select('users_groups.user_id, users_groups.group_id, groups_access.module, groups_access.access')
            	->from('users_groups')
            	->join('groups_access', 'users_groups.group_id = groups_access.group_id')
            	->where('users_groups.user_id = ' . $id);

            $permissions = $this->db->get();

            self::$userPermission = $permissions->result();
        }

        return self::$userPermission;
    }

    public function check_module($modules, $single = '')
    {
    	if (empty(self::$userPermission)){
    		$this->get_permission($this->session->userdata('user_id'));
    	}

        $permission_list = self::$userPermission;

        foreach ($permission_list as $permission) {
            if($permission->module == "all"){
                return true;
            }
            else{
                if(is_array($modules)){
                    foreach ($modules as $module) {
                        if(empty($single) && $module == $permission->module){
                            return true;
                        }
                        elseif(!empty($single) && $module == $single && $module == $permission->module){
                            return true;
                        }
                    }
                }
            }
        }

    	return false;
    }

    public function check_permission($modules, $access, $single = '')
    {
    	if (empty(self::$userPermission)){
    		$this->get_permission($this->session->userdata('user_id'));
    	}

    	$permission_list = self::$userPermission;

    	foreach ($permission_list as $permission) {
            if($permission->module == "all"){
                return true;
            }
            else{
                foreach ($modules as $module) {
                    if(empty($single)){
                        if($module == $permission->module && $access == $permission->access){
                            return true;
                        }
                    }
                    else{
                        if($module == $permission->module && $single == $permission->module && $access == $permission->access){
                            return true;
                        }
                    }
                }
            }
    	}

    	return false;
    }
}