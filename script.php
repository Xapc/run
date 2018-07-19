<?php
defined('_JEXEC') or die;

class plgSystemRunInstallerScript
{
	function install($parent) 
	{

	}
 
	function uninstall($parent) 
	{

	}
 
	function update($parent) 
	{

	}
 
	function preflight($type, $parent) 
	{

	}
 
	function postflight($type, $parent) 
	{
		$this->_customScript();
		$this->_uninstallItself();
	}
	
	function _uninstallItself(){
		// Remove plugin from database
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->delete()->from($db->quoteName('#__extensions'));
		$query->where(array(
			$db->quoteName('type').'='.$db->quote('plugin'),
			$db->quoteName('folder').'='.$db->quote('system'),
			$db->quoteName('element').'='.$db->quote('run')
		));
		$db->setQuery($query);
		$db->execute();

		// Remove files
		$plgPath = JPATH::clean(JPATH_ROOT.'/plugins/system/run');
		if(JFolder::exists($plgPath)){
			JFolder::delete($plgPath);
		}
	}

	function _customScript(){
    
	}
}