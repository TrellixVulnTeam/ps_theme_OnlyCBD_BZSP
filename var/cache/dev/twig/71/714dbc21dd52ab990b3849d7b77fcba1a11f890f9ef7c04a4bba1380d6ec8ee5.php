<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Product/ProductPage/Forms/form_related_products.html.twig */
class __TwigTemplate_3b404f87ec2412b179f95269408020f7cb9a446119a36fa9f85c48fee04777fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_related_products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_related_products.html.twig"));

        // line 25
        echo "<div  id=\"related-title\" class=\"row\">
  <div class=\"col-md-12\">
    <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Related product", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  </div>
</div>
<div id=\"related-content\" class=\"row ";
        // line 30
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "data", [])) == 0)) ? ("hide") : (""));
        echo "\">
  <div class=\"col-xl-8 col-lg-11\">
    <fieldset class=\"form-group\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    </fieldset>
  </div>
  <div class=\"col-md-1\">
      <fieldset class=\"form-group\">
        <a class=\"btn tooltip-link delete pl-0 pr-0\" id=\"reset_related_product\"><i class=\"material-icons\">delete</i></a>
      </fieldset>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-4\">
    <button type=\"button\" class=\"btn btn-outline-primary sensitive open ";
        // line 44
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "data", [])) > 0)) ? ("hide") : (""));
        echo "\" id=\"add-related-product-button\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a related product", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_related_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 45,  66 => 44,  52 => 33,  46 => 30,  40 => 27,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
<div  id=\"related-title\" class=\"row\">
  <div class=\"col-md-12\">
    <h2>{{ \"Related product\"|trans({}, 'Admin.Catalog.Feature') }}</h2>
  </div>
</div>
<div id=\"related-content\" class=\"row {{ form.vars.value.data|length == 0 ? 'hide':'' }}\">
  <div class=\"col-xl-8 col-lg-11\">
    <fieldset class=\"form-group\">
        {{ form_widget(form) }}
    </fieldset>
  </div>
  <div class=\"col-md-1\">
      <fieldset class=\"form-group\">
        <a class=\"btn tooltip-link delete pl-0 pr-0\" id=\"reset_related_product\"><i class=\"material-icons\">delete</i></a>
      </fieldset>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-4\">
    <button type=\"button\" class=\"btn btn-outline-primary sensitive open {{ form.vars.value.data|length > 0 ? 'hide':'' }}\" id=\"add-related-product-button\">
      <i class=\"material-icons\">add_circle</i> {{ 'Add a related product'|trans({}, 'Admin.Catalog.Feature') }}
    </button>
  </div>
</div>
", "@Product/ProductPage/Forms/form_related_products.html.twig", "/Applications/MAMP/htdocs/onlycbd.fr/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_related_products.html.twig");
    }
}
