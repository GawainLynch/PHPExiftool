<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class Face15Position extends AbstractTag
{

    protected $Id = 28;

    protected $Name = 'Face15Position';

    protected $FullName = 'Pentax::FacePos';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Face 15 Position';

    protected $flag_Permanent = true;

    protected $MaxLength = 2;

}
