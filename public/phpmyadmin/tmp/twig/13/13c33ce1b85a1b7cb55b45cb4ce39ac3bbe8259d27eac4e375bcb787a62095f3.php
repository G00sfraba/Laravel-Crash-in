<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* database/structure/empty_table.twig */
class __TwigTemplate_5f8d418c7aaa78b4361eae6d6bbd5588d0f97c7ad4f5868cb90b93180ee2f9bc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a class=\"truncate_table_anchor ajax\" href=\"sql.php\" data-post=\"";
        echo ($context["tbl_url_query"] ?? null);
        echo "&amp;sql_query=";
        // line 2
        echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
        echo "&amp;message_to_show=";
        echo twig_escape_filter($this->env, ($context["message_to_show"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 3
        echo ($context["title"] ?? null);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "database/structure/empty_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/empty_table.twig", "/home/vagrant/code/public/phpmyadmin/templates/database/structure/empty_table.twig");
    }
}
