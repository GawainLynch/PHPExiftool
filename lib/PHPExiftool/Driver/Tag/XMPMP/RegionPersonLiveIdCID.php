<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPMP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class RegionPersonLiveIdCID extends AbstractTag
{

    protected $Id = 'RegionInfoRegionsPersonLiveIdCID';

    protected $Name = 'RegionPersonLiveIdCID';

    protected $FullName = 'Microsoft::MP';

    protected $GroupName = 'XMP-MP';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-MP';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Region Person Live Id CID';

    protected $flag_List = true;

}
