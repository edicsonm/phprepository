<?php

/**
 * DataGroupScreenPermissionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DataGroupScreenPermissionTable extends PluginDataGroupScreenPermissionTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DataGroupScreenPermissionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DataGroupScreenPermission');
    }
}