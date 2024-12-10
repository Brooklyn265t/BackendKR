<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php";
use Amenadiel\JpGraph\Graph;
use Amenadiel\JpGraph\Plot;
class GraphController{
    private $model;
    public function __construct(GraphModel $model) {
        $this->model = $model;
    }
    public function bar() {
        $data1 = $this->model->getUses();
        $data2 = $this->model->getNames();
        // Создание графика
        $__width  = 600;
        $__height = 300;
        $graph    = new Graph\Graph($__width, $__height);
        $graph->SetScale('textlin');
        $graph->SetShadow();
        $graph->img->SetMargin(40, 30, 20, 40);
        // Создание столбчатого графика
        $bplot = new Plot\BarPlot($data1);
        $bplot->SetFillColor('green');
        $bplot->value->Show();
        // Добавление графика
        $graph->Add($bplot);
        $graph->title->Set('Popular OS');
        $graph->xaxis->SetTickLabels($data2);
        $graph->title->SetFont(FF_FONT1, FS_BOLD);
        $graph->yaxis->title->SetFont(FF_FONT1, FS_BOLD);
        $graph->xaxis->title->SetFont(FF_FONT1, FS_BOLD);
        // Отображение графика
        $res = $graph->Stroke(_IMG_HANDLER);
        ob_start();
        imagepng($res);
        $img = ob_get_contents();
        ob_end_clean();
        return base64_encode($img);
    }
}