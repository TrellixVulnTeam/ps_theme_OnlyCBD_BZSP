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

/* @Product/CatalogPage/Lists/products_table.html.twig */
class __TwigTemplate_cdc3a237fb957bd49adf1b60fb8b99ce47c36a525b864cbe41c5522c62da5f29 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_header' => [$this, 'block_product_catalog_form_table_header'],
            'product_catalog_form_table_filters' => [$this, 'block_product_catalog_form_table_filters'],
            'product_catalog_form_table_items' => [$this, 'block_product_catalog_form_table_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/products_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/products_table.html.twig"));

        // line 25
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 25)->unwrap();
        // line 26
        echo "<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", ["limit" =>         // line 30
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 31
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 32
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 33
($context["sortOrder"] ?? $this->getContext($context, "sortOrder"))]), "html", null, true);
        // line 35
        echo "\"
  >
    <thead class=\"with-filters\">
      ";
        // line 38
        $this->displayBlock('product_catalog_form_table_header', $context, $blocks);
        // line 84
        echo "
      ";
        // line 85
        $this->displayBlock('product_catalog_form_table_filters', $context, $blocks);
        // line 203
        echo "    </thead>
    ";
        // line 204
        $this->displayBlock('product_catalog_form_table_items', $context, $blocks);
        // line 214
        echo "  </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_product_catalog_form_table_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_header"));

        // line 39
        echo "        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">
            ";
        // line 42
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", [], "Admin.Global"), "id_product", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 48
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "name", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            ";
        // line 51
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", [], "Admin.Global"), "reference", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 54
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", [], "Admin.Catalog.Feature"), "name_category", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 57
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", [], "Admin.Catalog.Feature"), "price", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </th>

          ";
        // line 63
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 64
            echo "          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
            // line 65
            echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Catalog.Feature"), "sav_quantity", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
            echo "
          </th>
          ";
        } else {
            // line 68
            echo "            <th></th>
          ";
        }
        // line 70
        echo "
          <th scope=\"col\" class=\"text-center\">
            ";
        // line 72
        echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global"), "active", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
        echo "
          </th>
          ";
        // line 74
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 75
            echo "            <th scope=\"col\">
              ";
            // line 76
            echo $context["ps"]->getsortable_column_header($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", [], "Admin.Global"), "position", ($context["orderBy"] ?? $this->getContext($context, "orderBy")), ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")));
            echo "
            </th>
          ";
        }
        // line 79
        echo "          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
        </tr>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_product_catalog_form_table_filters($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_filters"));

        // line 86
        echo "        ";
        $context["filters_disabled"] = ($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"));
        // line 87
        echo "        <tr class=\"column-filters\">
          <th colspan=\"2\">
            ";
        // line 89
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 89)->display(twig_array_merge($context, ["input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>         // line 95
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")), "disabled" =>         // line 96
($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))]));
        // line 98
        echo "          </th>
          <th>&nbsp;</th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name\"
              value=\"";
        // line 106
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_name"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 108
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo "disabled";
        }
        // line 109
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_reference\"
              value=\"";
        // line 117
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_reference"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 119
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo "disabled";
        }
        // line 120
        echo "            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name_category\"
              value=\"";
        // line 128
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% input", ["%inputId%" => "filter_column_name_category"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 130
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo "disabled";
        }
        // line 131
        echo "            />
          </th>
          <th class=\"text-center\">
            ";
        // line 134
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 134)->display(twig_array_merge($context, ["input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>         // line 140
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")), "disabled" =>         // line 141
($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))]));
        // line 143
        echo "          </th>
          <th class=\"text-center\"></th>
          ";
        // line 145
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 146
            echo "          <th class=\"text-center\">
            ";
            // line 147
            $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 147)->display(twig_array_merge($context, ["input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", [], "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", [], "Admin.Global"), "value" =>             // line 153
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")), "disabled" =>             // line 154
($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))]));
            // line 156
            echo "          </th>
          ";
        } else {
            // line 158
            echo "            <th></th>
          ";
        }
        // line 160
        echo "
          <th id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"";
        // line 163
        if (($context["filters_disabled"] ?? $this->getContext($context, "filters_disabled"))) {
            echo " disabled";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%inputId% select", ["%inputId%" => "filter_column_active"], "Admin.Global"), "html", null, true);
        echo "\"
                >
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 166
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 167
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </th>
          ";
        // line 171
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 172
            echo "            <th>
              ";
            // line 173
            if ( !($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                // line 174
                echo "                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", [], "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                ";
            } else {
                // line 176
                echo "                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", [], "Admin.Actions");
                echo "\" />
              ";
            }
            // line 178
            echo "            </th>
          ";
        }
        // line 180
        echo "          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">search</i>
              ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </th>
        </tr>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 204
    public function block_product_catalog_form_table_items($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_items"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_items"));

        // line 205
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", ["limit" =>         // line 206
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 207
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 208
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 209
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "products" =>         // line 210
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 211
($context["last_sql"] ?? $this->getContext($context, "last_sql"))]));
        // line 212
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 212,  427 => 211,  426 => 210,  425 => 209,  424 => 208,  423 => 207,  422 => 206,  420 => 205,  411 => 204,  396 => 198,  390 => 195,  380 => 188,  374 => 185,  367 => 180,  363 => 178,  357 => 176,  351 => 174,  349 => 173,  346 => 172,  344 => 171,  335 => 167,  329 => 166,  319 => 163,  314 => 160,  310 => 158,  306 => 156,  304 => 154,  303 => 153,  302 => 147,  299 => 146,  297 => 145,  293 => 143,  291 => 141,  290 => 140,  289 => 134,  284 => 131,  280 => 130,  276 => 129,  272 => 128,  267 => 126,  259 => 120,  255 => 119,  251 => 118,  247 => 117,  242 => 115,  234 => 109,  230 => 108,  226 => 107,  222 => 106,  217 => 104,  209 => 98,  207 => 96,  206 => 95,  205 => 89,  201 => 87,  198 => 86,  189 => 85,  175 => 80,  172 => 79,  166 => 76,  163 => 75,  161 => 74,  156 => 72,  152 => 70,  148 => 68,  142 => 65,  139 => 64,  137 => 63,  131 => 60,  125 => 57,  119 => 54,  113 => 51,  107 => 48,  101 => 45,  95 => 42,  90 => 39,  81 => 38,  69 => 214,  67 => 204,  64 => 203,  62 => 85,  59 => 84,  57 => 38,  52 => 35,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  41 => 26,  39 => 25,);
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
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}
<div class=\"table-responsive\">
  <table
    class=\"table product mt-3\"
    redirecturl=\"{{ path('admin_product_catalog', {
        'limit': limit,
        'offset': offset,
        'orderBy': orderBy,
        'sortOrder': sortOrder
      })
    }}\"
  >
    <thead class=\"with-filters\">
      {% block product_catalog_form_table_header %}
        <tr class=\"column-headers\">
          <th scope=\"col\" style=\"width: 2rem\"></th>
          <th scope=\"col\" style=\"width: 5rem\">
            {{ ps.sortable_column_header(\"ID\"|trans({}, 'Admin.Global'), 'id_product', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\">
            {{ \"Image\"|trans({}, 'Admin.Global') }}
          </th>
          <th scope=\"col\">
            {{ ps.sortable_column_header(\"Name\"|trans({}, 'Admin.Global'), 'name', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Reference\"|trans({}, 'Admin.Global'), 'reference', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\">
            {{ ps.sortable_column_header(\"Category\"|trans({}, 'Admin.Catalog.Feature'), 'name_category', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature'), 'price', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ \"Price (tax incl.)\"|trans({}, 'Admin.Catalog.Feature') }}
          </th>

          {% if configuration('PS_STOCK_MANAGEMENT') %}
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Quantity\"|trans({}, 'Admin.Catalog.Feature'), 'sav_quantity', orderBy, sortOrder) }}
          </th>
          {% else %}
            <th></th>
          {% endif %}

          <th scope=\"col\" class=\"text-center\">
            {{ ps.sortable_column_header(\"Status\"|trans({}, 'Admin.Global'), 'active', orderBy, sortOrder) }}
          </th>
          {% if has_category_filter == true %}
            <th scope=\"col\">
              {{ ps.sortable_column_header(\"Position\"|trans({}, 'Admin.Global'), 'position', orderBy, sortOrder) }}
            </th>
          {% endif %}
          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              {{ \"Actions\"|trans({}, 'Admin.Global') }}
          </th>
        </tr>
      {% endblock %}

      {% block product_catalog_form_table_filters %}
        {% set filters_disabled = activate_drag_and_drop %}
        <tr class=\"column-filters\">
          <th colspan=\"2\">
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_id_product\",
              'min': '0',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_id_product,
              'disabled': filters_disabled,
            } %}
          </th>
          <th>&nbsp;</th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_name\"
              value=\"{{ filter_column_name }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_name'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_reference\"
              value=\"{{ filter_column_reference }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_reference'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_name_category\"
              value=\"{{ filter_column_name_category }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_name_category'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </th>
          <th class=\"text-center\">
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_price\",
              'min': '0',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_price,
              'disabled': filters_disabled,
            } %}
          </th>
          <th class=\"text-center\"></th>
          {% if configuration('PS_STOCK_MANAGEMENT') %}
          <th class=\"text-center\">
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_sav_quantity\",
              'min': '-1000000',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_sav_quantity,
              'disabled': filters_disabled,
            } %}
          </th>
          {% else %}
            <th></th>
          {% endif %}

          <th id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"{% if filters_disabled %} disabled{% endif %} aria-label=\"{{ \"%inputId% select\"|trans({'%inputId%': 'filter_column_active'}, 'Admin.Global') }}\"
                >
                <option value=\"\"></option>
                <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
              </select>
            </div>
          </th>
          {% if has_category_filter == true %}
            <th>
              {% if not(activate_drag_and_drop) %}
                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                {% else %}
                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
              {% endif %}
            </th>
          {% endif %}
          <th class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"{{ \"Search\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">search</i>
              {{ \"Search\"|trans({}, 'Admin.Actions') }}
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">clear</i>
              {{ \"Reset\"|trans({}, 'Admin.Actions') }}
            </button>
          </th>
        </tr>
      {% endblock %}
    </thead>
    {% block product_catalog_form_table_items %}
      {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
        'limit': limit,
        'offset': offset,
        'orderBy': orderBy,
        'sortOrder': sortOrder,
        'products': products,
        'last_sql': last_sql
      })) }}
    {% endblock %}
  </table>
</div>
", "@Product/CatalogPage/Lists/products_table.html.twig", "/Applications/MAMP/htdocs/onlycbd.fr/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/products_table.html.twig");
    }
}
