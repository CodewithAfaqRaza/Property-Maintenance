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

/* ui_suite_daisyui:menu */
class __TwigTemplate_282287ea62973825d88779220bfa2b76 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->normalizeProps($context, "ui_suite_daisyui:menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.ui_suite_daisyui--menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "ui_suite_daisyui:menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "ui_suite_daisyui:menu"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\ui_patterns\Template\TwigExtension']->preprocessProps($context, "ui_suite_daisyui:menu"));
        if ((($context["variant"] ?? null) && (($context["variant"] ?? null) != "vertical__md"))) {
            // line 2
            yield "  ";
            $context["variants"] = Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["variant"] ?? null), "__"), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return Twig\Extension\CoreExtension::replace(($context["v"] ?? null), [($context["v"] ?? null) => ("menu-" . ($context["v"] ?? null))]); });
            // line 3
            yield "  ";
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["variants"] ?? null)], "method", false, false, true, 3);
        }
        // line 5
        yield "
<ul ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu"], "method", false, false, true, 6), "html", null, true);
        yield ">
  ";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["collapsible"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->getTemplateForMacro("macro_menu_links_collapsible", $context, 7, $this->getSourceContext())->macro_menu_links_collapsible(...[($context["items"] ?? null), ($context["collapsible"] ?? null)])) : ($this->getTemplateForMacro("macro_menu_links", $context, 7, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null)]))));
        yield "
</ul>

";
        // line 31
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["variant", "v", "collapsible", "items", "loop"]);        yield from [];
    }

    // line 10
    public function macro_menu_links($items = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                yield "  <li";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((( !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 12) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 12))) ? (" class=\"menu-title\"") : ("")));
                yield ">
    ";
                // line 13
                $context["item_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 13), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
                // line 14
                yield "    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 15
                    yield "    <a";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15)], "method", false, false, true, 15), "html", null, true);
                    yield ">
      ";
                    // line 16
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 16), "html", null, true);
                    yield "
    </a>
    ";
                } else {
                    // line 19
                    yield "    <span";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_attributes"] ?? null), "html", null, true);
                    yield ">
      ";
                    // line 20
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 20), "html", null, true);
                    yield "
    </span>
    ";
                }
                // line 23
                yield "    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "    <ul>
    ";
                    // line 25
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->getTemplateForMacro("macro_menu_links", $context, 25, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 25)]));
                    yield "
    </ul>
    ";
                }
                // line 28
                yield "  </li>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function macro_menu_links_collapsible($items = null, $collapsible = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "collapsible" => $collapsible,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 33
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                yield "  <li";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((( !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 34))) ? (" class=\"menu-title\"") : ("")));
                yield ">
    ";
                // line 35
                $context["item_attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", true, true, true, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 35), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute())) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
                // line 36
                yield "    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 37
                    yield "    <details ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["collapsible"] ?? null) == "open")) ? ("open") : ("")));
                    yield ">
      <summary ";
                    // line 38
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_attributes"] ?? null), "html", null, true);
                    yield ">
      ";
                    // line 39
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 40
                        yield "      <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 40), "html", null, true);
                        yield "</a>
      ";
                    } else {
                        // line 42
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 42), "html", null, true);
                        yield "
      ";
                    }
                    // line 44
                    yield "      </summary>
      <ul>
        ";
                    // line 46
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->getTemplateForMacro("macro_menu_links_collapsible", $context, 46, $this->getSourceContext())->macro_menu_links_collapsible(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 46), ($context["collapsible"] ?? null)]));
                    yield "
      </ul>
    </details>
    ";
                } else {
                    // line 50
                    yield "      ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 51
                        yield "      <a";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item_attributes"] ?? null), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51)], "method", false, false, true, 51), "html", null, true);
                        yield ">
        ";
                        // line 52
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 52), "html", null, true);
                        yield "
      </a>
      ";
                    } else {
                        // line 55
                        yield "      <span";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_attributes"] ?? null), "html", null, true);
                        yield ">
        ";
                        // line 56
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 56), "html", null, true);
                        yield "
      </span>
      ";
                    }
                    // line 59
                    yield "    ";
                }
                // line 60
                yield "  </li>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ui_suite_daisyui:menu";
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
        return array (  276 => 60,  273 => 59,  267 => 56,  262 => 55,  256 => 52,  251 => 51,  248 => 50,  241 => 46,  237 => 44,  231 => 42,  223 => 40,  221 => 39,  217 => 38,  212 => 37,  209 => 36,  207 => 35,  202 => 34,  184 => 33,  171 => 32,  152 => 28,  146 => 25,  143 => 24,  140 => 23,  134 => 20,  129 => 19,  123 => 16,  118 => 15,  115 => 14,  113 => 13,  108 => 12,  90 => 11,  78 => 10,  71 => 31,  65 => 7,  61 => 6,  58 => 5,  54 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "ui_suite_daisyui:menu", "themes/contrib/ui_suite_daisyui/components/menu/menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "set" => 2, "macro" => 10, "for" => 11];
        static $filters = ["map" => 2, "split" => 2, "replace" => 2, "escape" => 6, "default" => 13];
        static $functions = ["create_attribute" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'macro', 'for'],
                ['map', 'split', 'replace', 'escape', 'default'],
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
