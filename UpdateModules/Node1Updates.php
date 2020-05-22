<?PHP
class UpdateModule_Node1Update implements UpdateModule
{
    public $Nodes = array("all");

    public function PreRun($ModuleHelper, $GitFolder)
    {
        echo "prerun" . PHP_EOL;
    }

    public function Run($ModuleHelper, $GitFolder)
    {
        echo "run" . PHP_EOL;
    }

    public function PostRun($ModuleHelper, $GitFolder)
    {
        echo "postrun" . PHP_EOL;
    }
}
