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

/* themes/contrib/ui_suite_daisyui/templates/forms/form-element-label.html.twig */
class __TwigTemplate_412417b3770bd9b529cc6d62c96e9588 extends Template
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
        // line 17
        $context["label_tag"] = (($_v0 = (($_v1 = ($context["element"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 17))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["label_tag"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["element"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 17)), "label_tag", [], "array", false, false, true, 17));
        // line 19
        $context["classes"] = [(($_v3 = (($_v4 =         // line 20
($context["element"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 20))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["label_class"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["element"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#daisy_ui_form"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#daisy_ui_form", [], "array", false, false, true, 20)), "label_class", [], "array", false, false, true, 20)), (((        // line 21
($context["title_display"] ?? null) == "after")) ? ("option label") : ("")), (((        // line 22
($context["title_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), (((($tmp =         // line 23
($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("js-form-required") : ("")), (((($tmp =         // line 24
($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-required") : (""))];
        // line 27
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null)) || ($context["required"] ?? null))) {
            // line 28
            yield "<";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("label_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_tag"] ?? null), "label")) : ("label")), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 28), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("label_tag", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_tag"] ?? null), "label")) : ("label")), "html", null, true);
            yield ">";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["element", "title_display", "required", "title", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/ui_suite_daisyui/templates/forms/form-element-label.html.twig";
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
        return array (  55 => 28,  53 => 27,  51 => 24,  50 => 23,  49 => 22,  48 => 21,  47 => 20,  46 => 19,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/ui_suite_daisyui/templates/forms/form-element-label.html.twig", "/var/www/html/web/themes/contrib/ui_suite_daisyui/templates/forms/form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 17, "if" => 27];
        static $filters = ["escape" => 28, "default" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'default'],
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
