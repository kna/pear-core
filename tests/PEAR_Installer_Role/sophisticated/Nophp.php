<?php
class PEAR_Installer_Role_Nophp extends PEAR_Installer_Role_Common
{
    var $_setup =
        array(
            'releasetypes' => array('extsrc', 'extbin'),
            'installable' => true,
            'locationconfig' => 'data_dir',
            'honorsbaseinstall' => false,
            'phpfile' => false,
            'executable' => false,
            'phpextension' => false,
        );
    function getInfo()
    {
        return array(
            'releasetypes' => array('extsrc', 'extbin'),
            'installable' => true,
            'locationconfig' => 'data_dir',
            'honorsbaseinstall' => false,
            'phpfile' => false,
            'executable' => false,
            'phpextension' => false,
        );
    }

    function setup(&$installer, $pkg, $atts, $file)
    {
    }

    /**
     * This method is called upon instantiating a PEAR_Config object.
     *
     * This method MUST call $config->addConfigVar() for all new configuration
     * variables required by the file role.  addConfigVar() expects an array of
     * configuration information that is identical to what is used internally in PEAR_Config
     * @access protected
     * @param PEAR_Config
     */
    function getSupportingConfigVars()
    {
        return array(
            'smonk' => array(
                'type' => 'string',
                'default' => 'hey baby',
                'doc' => 'there\'s some smonk on your frock',
                'prompt' => 'None more smonk',
                'group' => 'File Locations (Advanced)',
                ),
        );
    }
}
?>