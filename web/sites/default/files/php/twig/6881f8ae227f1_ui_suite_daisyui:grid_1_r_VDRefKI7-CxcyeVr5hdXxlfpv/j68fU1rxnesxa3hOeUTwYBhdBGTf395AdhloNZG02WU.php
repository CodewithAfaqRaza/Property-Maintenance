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

/* ui_suite_daisyui:grid_1_region */
class __TwigTemplate_1bea3a1de8ae21f64d81af3e26d5a4b1 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->normalizeProps($context, "ui_suite_daisyui:grid_1_region"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.ui_suite_daisyui--grid_1_region"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "ui_suite_daisyui:grid_1_region"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "ui_suite_daisyui:grid_1_region"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->preprocessProps($context, "ui_suite_daisyui:grid_1_region"));
        $context["container_type"] = ((array_key_exists("container_type", $context)) ? (Twig\Extension\CoreExtension::default(($context["container_type"] ?? null), "container mx-auto")) : ("container mx-auto"));
        // line 2
        yield "
";
        // line 3
        $context["grid_classes"] = ["grid", "grid-cols-12"];
        // line 4
        $context["grid_classes_attributes"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [($context["grid_classes"] ?? null)], "method", false, false, true, 4);
        // line 5
        yield "
";
        // line 6
        $context["col_span"] = ((array_key_exists("col_span", $context)) ? (Twig\Extension\CoreExtension::default(($context["col_span"] ?? null), 12)) : (12));
        // line 7
        $context["col_first_classes"] = [(((($tmp = ($context["col_span"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("col-span-" . ($context["col_span"] ?? null))) : ("")), (((($tmp = ($context["col_start"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("col-start-" . ($context["col_start"] ?? null))) : ("")), (((($tmp = ($context["col_span_lg"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("lg:col-span-" . ($context["col_span_lg"] ?? null))) : ("")), (((($tmp = ($context["col_start_lg"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("lg:col-start-" . ($context["col_start_lg"] ?? null))) : ("")), (((($tmp = ($context["col_span_md"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("md:col-span-" . ($context["col_span_md"] ?? null))) : ("")), (((($tmp = ($context["col_start_md"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("md:col-start-" . ($context["col_start_md"] ?? null))) : ("")), (((($tmp = ($context["col_span_sm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("sm:col-span-" . ($context["col_span_sm"] ?? null))) : ("")), (((($tmp = ($context["col_start_sm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("sm:col-start-" . ($context["col_start_sm"] ?? null))) : (""))];
        // line 8
        $context["col_first_attributes"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [($context["col_first_classes"] ?? null)], "method", false, false, true, 8);
        // line 9
        yield "
";
        // line 10
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["background_size"] ?? null), ($context["background_position"] ?? null), ($context["background_repeat"] ?? null)], "method", false, false, true, 10);
        // line 11
        yield "
";
        // line 12
        if ((($tmp = ($context["background_image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["style", (("background-image: url(" . ($context["background_image"] ?? null)) . ")")], "method", false, false, true, 13);
        }
        // line 15
        yield "
<section ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [(((($context["container_type"] ?? null) != "bg-breakout")) ? (($context["grid_classes"] ?? null)) : ("")), ($context["container_type"] ?? null)], "method", false, false, true, 16), "html", null, true);
        yield " >
";
        // line 17
        if ((($context["container_type"] ?? null) == "bg-breakout")) {
            // line 18
            yield "  <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["grid_classes_attributes"] ?? null), "addClass", ["container", "mx-auto"], "method", false, false, true, 18), "html", null, true);
            yield " >
";
        }
        // line 20
        yield "  <div ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["col_first_attributes"] ?? null), "html", null, true);
        yield ">
    ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["col_first"] ?? null), "html", null, true);
        yield "
  </div>
";
        // line 23
        if ((($context["container_type"] ?? null) == "bg-breakout")) {
            // line 24
            yield "  </div>
";
        }
        // line 26
        yield "</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["col_start", "col_span_lg", "col_start_lg", "col_span_md", "col_start_md", "col_span_sm", "col_start_sm", "background_size", "background_position", "background_repeat", "background_image", "col_first"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ui_suite_daisyui:grid_1_region";
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
        return array (  112 => 26,  108 => 24,  106 => 23,  101 => 21,  96 => 20,  90 => 18,  88 => 17,  84 => 16,  81 => 15,  77 => 13,  75 => 12,  72 => 11,  70 => 10,  67 => 9,  65 => 8,  63 => 7,  61 => 6,  58 => 5,  56 => 4,  54 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "ui_suite_daisyui:grid_1_region", "themes/contrib/ui_suite_daisyui/components/grid_1_region/grid_1_region.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 12];
        static $filters = ["default" => 1, "escape" => 16];
        static $functions = ["create_attribute" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape'],
                ['create_attribute'],
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
