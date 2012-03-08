<?php

namespace PHPExiftool\Driver\Tag\Olympus;

class PictureModeEffect extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1325;

    protected $Name = 'PictureModeEffect';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Picture Mode Effect';

    protected $Values = array(
        '-1 -1 1' => array(
            'Id' => '-1 -1 1',
            'Label' => 'Low',
        ),
        '0 -1 1' => array(
            'Id' => '0 -1 1',
            'Label' => 'Standard',
        ),
        '1 -1 1' => array(
            'Id' => '1 -1 1',
            'Label' => 'High',
        ),
    );

}
