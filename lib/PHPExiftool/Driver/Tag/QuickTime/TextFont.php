<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

class TextFont extends \PHPExiftool\Driver\Tag
{

    protected $Id = 4;

    protected $Name = 'TextFont';

    protected $FullName = 'QuickTime::TCMediaInfo';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Video';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Text Font';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'System',
        ),
    );

}