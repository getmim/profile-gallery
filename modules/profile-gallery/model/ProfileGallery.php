<?php
/**
 * ProfileGallery
 * @package profile-gallery
 * @version 0.0.1
 */

namespace ProfileGallery\Model;

class ProfileGallery extends \Mim\Model
{

    protected static $table = 'profile_gallery';

    protected static $chains = [];

    protected static $q = ['title'];
}