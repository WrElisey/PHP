                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <?
global $mysqli;

/**
 * Class model_intro  is a model for displaying a photo with text on a page.
 */
Class model_intro extends Model
{
    /**
     * @var string $img is url image;
     * @var string $text is small text on the image;
     * @var string $headline is caption on the image;
     */
    public $img;
    public $text;
    public $headline;


    /**
     * model_intro constructor.
     * @param $headline
     * @param $text
     * @param $img
     */
    public function __construct($headline,$text,$img)
    {
        $this->headline=$headline;
        $this->img=$img;
        $this->text=$text;
    }

    /**
     * function to call the view object model_intro.
     */
    public function show()
    {
        include "/application/views/intro_view.php";
    }
}
?>