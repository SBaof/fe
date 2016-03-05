<?php
    class Smarty{
        public $template_dir;//模板目录
        public $compile_dir;//编译目录
        public $arr=array();//定义一个数组，用以存放assign中的第二个参数传过来的值
        public function __construct($template_dir="../templates",$compile_dir="../templates_c"){
                $this->template_dir=$template_dir;//模板目录
                $this->compile_dir=$compile_dir;  //编译目录
            }
        public function assign($content,$replacment=null){
                if($content!=""){                 //如果指定模板变量，才将要赋的值存储到数组中
                        $this->arr[$content]=$replacment;
                    }
            }
        public function display($page){
                $tplFile=$this->template_dir."/".$page;//读取模板文件，注意：如果模板目录下还有子目录，记得要写完整，比如，$smarty->display('Default/index.tpl')
                if(!file_exists($tplFile)){
                    echo <<<STR
<p>No Tpl has found!</p>
STR;
                        return;
                }
                $comFile=$this->compile_dir."/"."com_".$page.".php";
                $tplContent=$this->con_replace(file_get_contents($tplFile));//将smarty标签替换为php的标签
                file_put_contents($comFile,$tplContent);
                include $comFile;
        }
        public function con_replace($content){
                $pattern=array(
                    '/{{\s*\$([a-zA-Z_][a-zA-Z_0-9]*)\s*}}/i'
                );
                   $replacement=array(
                       '<?php echo $this->arr["${1}"] ?>'
                );
                    return preg_replace($pattern,$replacement,$content);
                }
        }
?>
