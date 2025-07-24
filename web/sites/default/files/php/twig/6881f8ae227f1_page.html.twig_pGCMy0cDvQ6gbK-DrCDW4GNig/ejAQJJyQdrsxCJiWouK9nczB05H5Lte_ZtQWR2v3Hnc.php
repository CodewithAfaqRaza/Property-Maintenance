<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/ui_suite_daisyui/templates/system/page.html.twig */
class __TwigTemplate_0c321b78b27640ad20c42cd448f4940b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 44
        yield "<div class=\"!container mx-auto pb-5\">

  ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "ui_suite_daisyui:navbar", ["start" => CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["page"] ?? null), "navbar_start", [], "any", false, false, true, 47), "center" => CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["page"] ?? null), "navbar_center", [], "any", false, false, true, 48), "end" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["page"] ?? null), "navbar_end", [], "any", false, false, true, 49)], false));
        // line 50
        yield "

  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 53
        yield "  <main role=\"main\">
    ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "ui_suite_daisyui:grid_2_regions", ["col_first" => CoreExtension::getAttribute($this->env, $this->source,             // line 56
($context["page"] ?? null), "sidebar", [], "any", false, false, true, 56), "col_second" => CoreExtension::getAttribute($this->env, $this->source,             // line 57
($context["page"] ?? null), "content", [], "any", false, false, true, 57), "col_span" => ["col-span-12", "col-span-12"], "col_span_lg" => ["lg:col-span-3", "lg:col-span-9"], "col_span_md" => ["md:col-span-4", "md:col-span-8"], "col_span_sm" => ["sm:col-span-12", "sm:col-span-12"]], false));
            // line 62
            yield "
    ";
        } else {
            // line 64
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "ui_suite_daisyui:grid_1_region", ["col_first" => CoreExtension::getAttribute($this->env, $this->source,             // line 65
($context["page"] ?? null), "content", [], "any", false, false, true, 65)], false));
            // line 66
            yield "
    ";
        }
        // line 68
        yield "  </main>

  ";
        // line 70
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "ui_suite_daisyui:grid_1_region", ["col_first" => CoreExtension::getAttribute($this->env, $this->source,             // line 72
($context["page"] ?? null), "footer", [], "any", false, false, true, 72), "container_type" => "breakout"], false));
            // line 74
            yield "
  ";
        }
        // line 76
        yield "
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_daisyui/templates/system/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  93 => 76,  89 => 74,  87 => 72,  85 => 71,  83 => 70,  79 => 68,  75 => 66,  73 => 65,  71 => 64,  67 => 62,  65 => 57,  64 => 56,  62 => 55,  60 => 54,  57 => 53,  53 => 50,  51 => 49,  50 => 48,  49 => 47,  48 => 46,  44 => 44,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_daisyui/templates/system/page.html.twig", "/var/www/html/web/themes/contrib/ui_suite_daisyui/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 54];
        static $filters = [];
        static $functions = ["include" => 46];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['include'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
