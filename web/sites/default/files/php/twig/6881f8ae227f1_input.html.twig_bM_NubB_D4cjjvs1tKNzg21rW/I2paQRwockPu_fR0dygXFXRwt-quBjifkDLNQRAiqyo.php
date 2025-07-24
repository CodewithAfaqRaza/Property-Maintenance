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

/* themes/contrib/ui_suite_daisyui/templates/forms/input.html.twig */
class __TwigTemplate_7525ca121d89d650776f6126f43afce1 extends Template
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
        // line 15
        yield "
";
        // line 16
        $context["type"] = (($_v0 = ($context["element"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#type"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#type", [], "array", false, false, true, 16));
        // line 17
        $context["input_class"] = (($_v1 = (($_v2 = ($context["element"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 17))) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["input_class"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["element"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 17)), "input_class", [], "array", false, false, true, 17));
        // line 18
        $context["wrapper_class"] = (($_v4 = (($_v5 = ($context["element"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 18))) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["wrapper_class"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v6 = ($context["element"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 18)), "wrapper_class", [], "array", false, false, true, 18));
        // line 19
        $context["button_type"] = (($_v7 = ($context["element"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["#button_type"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#button_type", [], "array", false, false, true, 19));
        // line 20
        $context["is_boolean"] = ((($context["type"] ?? null) == "checkbox") && (((($_v8 = (($_v9 = ($context["element"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#attributes"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#attributes", [], "array", false, false, true, 20))) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["value"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v10 = ($context["element"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["#attributes"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#attributes", [], "array", false, false, true, 20)), "value", [], "array", false, false, true, 20)) == 1) || ((($_v11 = (($_v12 = ($context["element"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["#attributes"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#attributes", [], "array", false, false, true, 20))) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["value"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v13 = ($context["element"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["#attributes"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#attributes", [], "array", false, false, true, 20)), "value", [], "array", false, false, true, 20)) == 0)));
        // line 21
        if ((($context["wrapper_class"] ?? null) == "floating-label")) {
            // line 22
            yield "    ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["placeholder", (($_v14 = ($context["element"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#title", [], "array", false, false, true, 22))], "method", false, false, true, 22);
        }
        // line 24
        $context["classes"] = [        // line 25
($context["input_class"] ?? null), (((        // line 26
($context["type"] ?? null) == "file")) ? ("file-input") : ("")), ((((        // line 27
($context["type"] ?? null) == "checkbox") && ($context["is_boolean"] ?? null))) ? ("toggle") : ("")), ((((        // line 28
($context["type"] ?? null) == "checkbox") &&  !($context["is_boolean"] ?? null))) ? ("checkbox") : ("")), (((        // line 29
($context["type"] ?? null) == "radio")) ? ("radio") : ("")), (((        // line 30
($context["type"] ?? null) == "submit")) ? ("btn") : ("")), ((((        // line 31
($context["type"] ?? null) == "submit") && (($context["button_type"] ?? null) == "primary"))) ? ("btn-primary") : (""))];
        // line 33
        yield "<input";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 33), "html", null, true);
        yield " />";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["element", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_daisyui/templates/forms/input.html.twig";
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
        return array (  72 => 33,  70 => 31,  69 => 30,  68 => 29,  67 => 28,  66 => 27,  65 => 26,  64 => 25,  63 => 24,  59 => 22,  57 => 21,  55 => 20,  53 => 19,  51 => 18,  49 => 17,  47 => 16,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_daisyui/templates/forms/input.html.twig", "/var/www/html/web/themes/contrib/ui_suite_daisyui/templates/forms/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 16, "if" => 21];
        static $filters = ["escape" => 33];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
