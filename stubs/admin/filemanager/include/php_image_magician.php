<?php

# ========================================================================#
#
#  This work is licensed under the Creative Commons Attribution 3.0 Unported
#  License. To view a copy of this license,
#  visit http://creativecommons.org/licenses/by/3.0/ or send a letter to
#  Creative Commons, 444 Castro Street, Suite 900, Mountain View, California,
#  94041, USA.
#
#  All rights reserved.
#
#  Author:    Jarrod Oberto
#  Version:   1.5.1
#  Date:      10-05-11
#  Purpose:   Provide tools for image manipulation using GD
#  Param In:  See functions.
#  Param Out: Produces a resized image
#  Requires : Requires PHP GD library.
#  Usage Example:
#                     include("lib/php_image_magician.php");
#                     $magicianObj = new resize('images/car.jpg');
#                     $magicianObj -> resizeImage(150, 100, 0);
#                     $magicianObj -> saveImage('images/car_small.jpg', 100);
#
#        - See end of doc for more examples -
#
#  Supported file types include: jpg, png, gif, bmp, psd (read)
#
#
#
#  The following functions are taken from phpThumb() [available from
#    http://phpthumb.sourceforge.net], and are used with written permission
#  from James Heinrich.
#    - GD2BMPstring
#      - GetPixelColor
#      - LittleEndian2String
#
#  The following functions are from Marc Hibbins and are used with written
#  permission (are also under the Attribution-ShareAlike
#  [http://creativecommons.org/licenses/by-sa/3.0/] license.
#    -
#
#  PhpPsdReader is used with written permission from Tim de Koning.
#  [http://www.kingsquare.nl/phppsdreader]
#
#
#
#  Modificatoin history
#  Date      Initials  Ver Description
#  10-05-11  J.C.O   0.0 Initial build
#  01-06-11  J.C.O   0.1.1   * Added reflections
#              * Added Rounded corners
#              * You can now use PNG interlacing
#              * Added shadow
#              * Added caption box
#              * Added vintage filter
#              * Added dynamic image resizing (resize on the fly)
#              * minor bug fixes
#  05-06-11  J.C.O   0.1.1.1 * Fixed undefined variables
#  17-06-11  J.C.O   0.1.2   * Added image_batch_class.php class
#              * Minor bug fixes
#  26-07-11  J.C.O   0.1.4 * Added support for external images
#              * Can now set the crop poisition
#  03-08-11  J.C.O   0.1.5 * Added reset() method to reset resource to
#                original input file.
#              * Added method addTextToCaptionBox() to
#                simplify adding text to a caption box.
#              * Added experimental writeIPTC. (not finished)
#              * Added experimental readIPTC. (not finished)
#  11-08-11  J.C.O     * Added initial border presets.
#  30-08-11  J.C.O     * Added 'auto' crop option to crop portrait
#                images near the top.
#  08-09-11  J.C.O     * Added cropImage() method to allow standalone
#                cropping.
#  17-09-11  J.C.O     * Added setCropFromTop() set method - set the
#                percentage to crop from the top when using
#                crop 'auto' option.
#              * Added setTransparency() set method - allows you
#                to turn transparency off (like when saving
#                as a jpg).
#              * Added setFillColor() set method - set the
#                background color to use instead of transparency.
#  05-11-11  J.C.O   0.1.5.1 * Fixed interlacing option
#  0-07-12  J.C.O   1.0
#
#  Known issues & Limitations:
# -------------------------------
#  Not so much an issue, the image is destroyed on the deconstruct rather than
#  when we have finished with it. The reason for this is that we don't know
#  when we're finished with it as you can both save the image and display
#  it directly to the screen (imagedestroy($this->imageResized))
#
#  Opening BMP files is slow. A test with 884 bmp files processed in a loop
#  takes forever - over 5 min. This test inlcuded opening the file, then
#  getting and displaying its width and height.
#
#  $forceStretch:
# -------------------------------
#  On by default.
#  $forceStretch can be disabled by calling method setForceStretch with false
#  parameter. If disabled, if an images original size is smaller than the size
#  specified by the user, the original size will be used. This is useful when
#  dealing with small images.
#
#  If enabled, images smaller than the size specified will be stretched to
#  that size.
#
#  Tips:
# -------------------------------
#  * If you're resizing a transparent png and saving it as a jpg, set
#  $keepTransparency to false with: $magicianObj->setTransparency(false);
#
#  FEATURES:
#    * EASY TO USE
#    * BMP SUPPORT (read & write)
#    * PSD (photoshop) support (read)
#    * RESIZE IMAGES
#      - Preserve transparency (png, gif)
#      - Apply sharpening (jpg) (requires PHP >= 5.1.0)
#      - Set image quality (jpg, png)
#      - Resize modes:
#        - exact size
#        - resize by width (auto height)
#        - resize by height (auto width)
#        - auto (automatically determine the best of the above modes to use)
#        - crop - resize as best as it can then crop the rest
#      - Force stretching of smaller images (upscale)
#    * APPLY FILTERS
#      - Convert to grey scale
#      - Convert to black and white
#      - Convert to sepia
#      - Convert to negative
#    * ROTATE IMAGES
#      - Rotate using predefined "left", "right", or "180"; or any custom degree amount
#    * EXTRACT EXIF DATA (requires exif module)
#      - make
#      - model
#      - date
#      - exposure
#      - aperture
#      - f-stop
#      - iso
#      - focal length
#      - exposure program
#      - metering mode
#      - flash status
#      - creator
#      - copyright
#    * ADD WATERMARK
#      - Specify exact x, y placement
#      - Or, specify using one of the 9 pre-defined placements such as "tl"
#        (for top left), "m" (for middle), "br" (for bottom right)
#        - also specify padding from edge amount (optional).
#      - Set opacity of watermark (png).
#    * ADD BORDER
#    * USE HEX WHEN SPECIFYING COLORS (eg: #ffffff)
#    * SAVE IMAGE OR OUTPUT TO SCREEN
#
#
# ========================================================================#
class imageLib
{
    protected $imageResized;
    ## --------------------------------------------------------
    public function __construct($fileName)
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Resize
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function resizeImage($newWidth, $newHeight, $option = 0, $sharpen = \false, $autoRotate = \false)
    {
    }
    ## --------------------------------------------------------
    public function cropImage($newWidth, $newHeight, $cropPos = 'm')
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Presets
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    #
    # Preset are pre-defined templates you can apply to your image.
    #
    # These are inteded to be applied to thumbnail images.
    #
    public function borderPreset($preset)
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Draw border
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function addBorder($thickness = 1, $rgbArray = array(255, 255, 255))
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Gray Scale
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function greyScale()
    {
    }
    ## --------------------------------------------------------
    public function greyScaleEnhanced()
    {
    }
    ## --------------------------------------------------------
    public function greyScaleDramatic()
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Black 'n White
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function blackAndWhite()
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Negative
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function negative()
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Sepia
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function sepia()
    {
    }
    ## --------------------------------------------------------
    public function sepia2()
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Vintage
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function vintage()
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Presets By Marc Hibbins
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    /** Apply 'Monopin' preset */
    public function gd_filter_monopin()
    {
    }
    ## --------------------------------------------------------
    public function gd_filter_vintage()
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Colorise
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function image_colorize($rgb)
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Reflection
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function addReflection($reflectionHeight = 50, $startingTransparency = 30, $inside = \false, $bgColor = '#fff', $stretch = \false, $divider = 0)
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Rotate
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function rotate($value = 90, $bgColor = 'transparent')
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Round corners
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function roundCorners($radius = 5, $bgColor = 'transparent')
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Shadow
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function addShadow($shadowAngle = 45, $blur = 15, $bgColor = 'transparent')
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Add Caption Box
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function addCaptionBox($side = 'b', $thickness = 50, $padding = 0, $bgColor = '#000', $transparencyAmount = 30)
    {
    }
    ## --------------------------------------------------------
    public function addTextToCaptionBox($text, $fontColor = '#fff', $fontSize = 12, $angle = 0, $font = \null)
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Get EXIF Data
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function getExif($debug = \false)
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Get IPTC Data
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Write IPTC Data
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function writeIPTCcaption($value)
    {
    }
    ## --------------------------------------------------------
    public function writeIPTCwriter($value)
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Write XMP Data
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    //http://xmpphptoolkit.sourceforge.net/
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Add Text
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function addText($text, $pos = '20x20', $padding = 0, $fontColor = '#fff', $fontSize = 12, $angle = 0, $font = \null)
    {
    }
    /*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*-
      Add Watermark
    *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-*-*-*-*/
    public function addWatermark($watermarkImage, $pos, $padding = 0, $opacity = 0)
    {
    }
    ## --------------------------------------------------------
    public function reset()
    {
    }
    ## --------------------------------------------------------
    public function saveImage($savePath, $imageQuality = "100")
    {
    }
    ## --------------------------------------------------------
    public function displayImage($fileType = 'jpg', $imageQuality = "100")
    {
    }
    ## --------------------------------------------------------
    public function setTransparency($bool)
    {
    }
    ## --------------------------------------------------------
    public function setFillColor($value)
    {
    }
    ## --------------------------------------------------------
    public function setCropFromTop($value)
    {
    }
    ## --------------------------------------------------------
    public function testGDInstalled()
    {
    }
    ## --------------------------------------------------------
    public function testEXIFInstalled()
    {
    }
    ## --------------------------------------------------------
    public function testIsImage($image)
    {
    }
    ## --------------------------------------------------------
    public function testFunct()
    {
    }
    ## --------------------------------------------------------
    public function setForceStretch($value)
    {
    }
    ## --------------------------------------------------------
    public function setFile($fileName)
    {
    }
    ## --------------------------------------------------------
    public function getFileName()
    {
    }
    ## --------------------------------------------------------
    public function getHeight()
    {
    }
    ## --------------------------------------------------------
    public function getWidth()
    {
    }
    ## --------------------------------------------------------
    public function getOriginalHeight()
    {
    }
    ## --------------------------------------------------------
    public function getOriginalWidth()
    {
    }
    ## --------------------------------------------------------
    public function getErrors()
    {
    }
    ## --------------------------------------------------------
    protected function formatColor($value)
    {
    }
    ## --------------------------------------------------------
    public function hex2dec($hex)
    {
    }
    ## --------------------------------------------------------
    public function checkStringStartsWith($needle, $haystack)
    {
    }
    ## --------------------------------------------------------
    public function __destruct()
    {
    }
    ## --------------------------------------------------------
}
