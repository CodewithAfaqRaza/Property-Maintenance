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

/* themes/contrib/ui_suite_daisyui/templates/forms/form-element.html.twig */
class __TwigTemplate_84e88f48a4af436653d4e75de188f1ff extends Template
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
        // line 49
        yield "
";
        // line 50
        $context["wrapper_tag"] = (($_v0 = (($_v1 = ($context["element"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 50))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["wrapper_tag"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["element"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 50)), "wrapper_tag", [], "array", false, false, true, 50));
        // line 51
        $context["wrapper_class"] = (($_v3 = (($_v4 = ($context["element"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 51))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["wrapper_class"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["element"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 51)), "wrapper_class", [], "array", false, false, true, 51));
        // line 52
        $context["type"] = (($_v6 = ($context["element"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#type"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#type", [], "array", false, false, true, 52));
        // line 53
        $context["description_display"] = (((($context["wrapper_tag"] ?? null) == "fieldset")) ? (($context["description_display"] ?? null)) : ("hidden"));
        // line 54
        $context["label_display"] = (((($context["wrapper_class"] ?? null) == "floating-label")) ? ("after") : (($context["label_display"] ?? null)));
        // line 56
        $context["classes"] = [        // line 57
($context["wrapper_class"] ?? null), "mb-4", "js-form-item", "form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 61
($context["type"] ?? null))), ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 62
($context["name"] ?? null))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 63
($context["name"] ?? null))), ((!CoreExtension::inFilter(        // line 64
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 65
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), (((($tmp =         // line 66
($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-item--error") : (""))];
        // line 70
        $context["description_classes"] = ["description", (((        // line 72
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 75
        yield "<";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("wrapper_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["wrapper_tag"] ?? null), "div")) : ("div")), "html", null, true);
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 75), "html", null, true);
        yield ">
  ";
        // line 76
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 77
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 79
        yield "  ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "    <span class=\"field-prefix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 82
        yield "  ";
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 82))) {
            // line 83
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 83), "html", null, true);
            yield ">
      ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 84), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 87
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
  ";
        // line 88
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "    <span class=\"field-suffix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 91
        yield "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 92
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 94
        yield "  ";
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "    <div class=\"form-item--error-message\">
      ";
            // line 96
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 99
        yield "  ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 99))) {
            // line 100
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 100), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 100), "html", null, true);
            yield ">
      ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 101), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 104
        yield "</";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("wrapper_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["wrapper_tag"] ?? null), "div")) : ("div")), "html", null, true);
        yield ">
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["element", "name", "title_display", "disabled", "errors", "attributes", "label", "prefix", "description", "children", "suffix"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_daisyui/templates/forms/form-element.html.twig";
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
        return array (  154 => 104,  148 => 101,  143 => 100,  140 => 99,  134 => 96,  131 => 95,  128 => 94,  122 => 92,  119 => 91,  113 => 89,  111 => 88,  106 => 87,  100 => 84,  95 => 83,  92 => 82,  86 => 80,  83 => 79,  77 => 77,  75 => 76,  69 => 75,  67 => 72,  66 => 70,  64 => 66,  63 => 65,  62 => 64,  61 => 63,  60 => 62,  59 => 61,  58 => 57,  57 => 56,  55 => 54,  53 => 53,  51 => 52,  49 => 51,  47 => 50,  44 => 49,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_daisyui/templates/forms/form-element.html.twig", "/var/www/html/web/themes/contrib/ui_suite_daisyui/templates/forms/form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 50, "if" => 76];
        static $filters = ["clean_class" => 61, "escape" => 75, "default" => 75];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'default'],
                [],
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
