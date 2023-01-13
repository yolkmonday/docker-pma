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

/* database/routines/editor_form.twig */
class __TwigTemplate_01c23ff4a901e3d40cae108940715d40 extends Template
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
        echo "<form class=\"rte_form\" action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/database/routines");
        echo "\" method=\"post\">
  <input name=\"";
        // line 2
        echo ((($context["is_edit_mode"] ?? null)) ? ("edit_item") : ("add_item"));
        echo "\" type=\"hidden\" value=\"1\">
  ";
        // line 3
        if (($context["is_edit_mode"] ?? null)) {
            // line 4
            echo "    <input name=\"item_original_name\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_original_name", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
    <input name=\"item_original_type\" type=\"hidden\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_original_type", [], "any", false, false, false, 5), "html", null, true);
            echo "\">
  ";
        }
        // line 7
        echo "  ";
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        echo "

  <div class=\"card\">
    <div class=\"card-header\">
      ";
echo _gettext("Details");
        // line 12
        echo "      ";
        if ( !($context["is_edit_mode"] ?? null)) {
            // line 13
            echo "        ";
            echo PhpMyAdmin\Html\MySQLDocumentation::show("CREATE_PROCEDURE");
            echo "
      ";
        }
        // line 15
        echo "    </div>

    <div class=\"card-body\">
      <table class=\"rte_table table table-borderless table-sm\">
        <tr>
          <td>";
echo _gettext("Routine name");
        // line 20
        echo "</td>
          <td>
            <input type=\"text\" name=\"item_name\" maxlength=\"64\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_name", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
          </td>
        </tr>
        <tr>
          <td>";
echo _gettext("Type");
        // line 26
        echo "</td>
          <td>
            ";
        // line 28
        if (($context["is_ajax"] ?? null)) {
            // line 29
            echo "              <select name=\"item_type\">
                <option value=\"PROCEDURE\"";
            // line 30
            echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_type", [], "any", false, false, false, 30) == "PROCEDURE")) ? (" selected") : (""));
            echo ">PROCEDURE</option>
                <option value=\"FUNCTION\"";
            // line 31
            echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_type", [], "any", false, false, false, 31) == "FUNCTION")) ? (" selected") : (""));
            echo ">FUNCTION</option>
              </select>
            ";
        } else {
            // line 34
            echo "              <input name=\"item_type\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_type", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
              <div class=\"fw-bold text-center w-50\">
                ";
            // line 36
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["routine"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["item_type"] ?? null) : null), "html", null, true);
            echo "
              </div>
              <input type=\"submit\" name=\"routine_changetype\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_sprintf(_gettext("Change to %s"), twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_type_toggle", [], "any", false, false, false, 38)), "html", null, true);
            echo "\">
            ";
        }
        // line 40
        echo "          </td>
        </tr>
        <tr>
          <td>";
echo _gettext("Parameters");
        // line 43
        echo "</td>
          <td>
            <table class=\"routine_params_table table table-borderless table-sm\">
              <thead>
                <tr>
                  <td></td>
                  <th class=\"routine_direction_cell";
        // line 49
        echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_type", [], "any", false, false, false, 49) == "FUNCTION")) ? (" hide") : (""));
        echo "\">";
echo _gettext("Direction");
        echo "</th>
                  <th>";
echo _gettext("Name");
        // line 50
        echo "</th>
                  <th>";
echo _gettext("Type");
        // line 51
        echo "</th>
                  <th>";
echo _gettext("Length/Values");
        // line 52
        echo "</th>
                  <th colspan=\"2\">";
echo _gettext("Options");
        // line 53
        echo "</th>
                  <th class=\"routine_param_remove hide\"></th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 58
        echo ($context["parameter_rows"] ?? null);
        echo "
              </tbody>
            </table>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input type=\"button\" class=\"btn btn-primary\" name=\"routine_addparameter\" value=\"";
echo _gettext("Add parameter");
        // line 66
        echo "\">
            <input type=\"submit\" name=\"routine_removeparameter\" value=\"";
echo _gettext("Remove last parameter");
        // line 67
        echo "\"";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_num_params", [], "any", false, false, false, 67)) ? (" disabled") : (""));
        echo ">
          </td>
        </tr>
        <tr class=\"routine_return_row";
        // line 70
        echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_type", [], "any", false, false, false, 70) == "PROCEDURE")) ? (" hide") : (""));
        echo "\">
          <td>";
echo _gettext("Return type");
        // line 71
        echo "</td>
          <td>
            <select name=\"item_returntype\">
              ";
        // line 74
        echo PhpMyAdmin\Util::getSupportedDatatypes(true, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_returntype", [], "any", false, false, false, 74));
        echo "
            </select>
          </td>
        </tr>
        <tr class=\"routine_return_row";
        // line 78
        echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_type", [], "any", false, false, false, 78) == "PROCEDURE")) ? (" hide") : (""));
        echo "\">
          <td>";
echo _gettext("Return length/values");
        // line 79
        echo "</td>
          <td>
            <input type=\"text\" name=\"item_returnlength\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_returnlength", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
          </td>
          <td class=\"hide no_len\">---</td>
        </tr>
        <tr class=\"routine_return_row";
        // line 85
        echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_type", [], "any", false, false, false, 85) == "PROCEDURE")) ? (" hide") : (""));
        echo "\">
          <td>";
echo _gettext("Return options");
        // line 86
        echo "</td>
          <td>
            <div>
              <select lang=\"en\" dir=\"ltr\" name=\"item_returnopts_text\">
                <option value=\"\">";
echo _gettext("Charset");
        // line 90
        echo "</option>
                <option value=\"\"></option>
                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 93
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 93), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 93), "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_returnopts_text", [], "any", false, false, false, 93) == twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 93))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 93), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "              </select>
            </div>
            <div>
              <select name=\"item_returnopts_num\">
                <option value=\"\"></option>
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["numeric_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["numeric_option"]) {
            // line 101
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["numeric_option"], "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_returnopts_num", [], "any", false, false, false, 101) == $context["numeric_option"])) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["numeric_option"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numeric_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "              </select>
            </div>
            <div class=\"hide no_opts\">---</div>
          </td>
        </tr>
        <tr>
          <td>";
echo _gettext("Definition");
        // line 109
        echo "</td>
          <td>
            <textarea name=\"item_definition\" rows=\"15\" cols=\"40\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_definition", [], "any", false, false, false, 111), "html", null, true);
        echo "</textarea>
          </td>
        </tr>
        <tr>
          <td>";
echo _gettext("Is deterministic");
        // line 115
        echo "</td>
          <td>
            <input type=\"checkbox\" name=\"item_isdeterministic\"";
        // line 117
        echo twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_isdeterministic", [], "any", false, false, false, 117);
        echo ">
          </td>
        </tr>

        ";
        // line 121
        if (($context["is_edit_mode"] ?? null)) {
            // line 122
            echo "          <tr>
            <td>
              ";
echo _gettext("Adjust privileges");
            // line 125
            echo "              ";
            echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
            echo "
            </td>
            <td>
              ";
            // line 128
            if (($context["has_privileges"] ?? null)) {
                // line 129
                echo "                <input type=\"checkbox\" name=\"item_adjust_privileges\" value=\"1\" checked>
              ";
            } else {
                // line 131
                echo "                <input type=\"checkbox\" name=\"item_adjust_privileges\" value=\"1\" title=\"";
echo _gettext("You do not have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
                echo "\" disabled>
              ";
            }
            // line 133
            echo "            </td>
          </tr>
        ";
        }
        // line 136
        echo "
        <tr>
          <td>";
echo _gettext("Definer");
        // line 138
        echo "</td>
          <td>
            <input type=\"text\" name=\"item_definer\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_definer", [], "any", false, false, false, 140), "html", null, true);
        echo "\">
          </td>
        </tr>
        <tr>
          <td>";
echo _gettext("Security type");
        // line 144
        echo "</td>
          <td>
            <select name=\"item_securitytype\">
              <option value=\"DEFINER\"";
        // line 147
        echo twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_securitytype_definer", [], "any", false, false, false, 147);
        echo ">DEFINER</option>
              <option value=\"INVOKER\"";
        // line 148
        echo twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_securitytype_invoker", [], "any", false, false, false, 148);
        echo ">INVOKER</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>";
echo _gettext("SQL data access");
        // line 153
        echo "</td>
          <td>
            <select name=\"item_sqldataaccess\">
              ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sql_data_access"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 157
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_sqldataaccess", [], "any", false, false, false, 157) == $context["value"])) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "            </select>
          </td>
        </tr>
        <tr>
          <td>";
echo _gettext("Comment");
        // line 163
        echo "</td>
          <td>
            <input type=\"text\" name=\"item_comment\" maxlength=\"64\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["routine"] ?? null), "item_comment", [], "any", false, false, false, 165), "html", null, true);
        echo "\">
          </td>
        </tr>
      </table>
    </div>

    ";
        // line 171
        if (($context["is_ajax"] ?? null)) {
            // line 172
            echo "      <input type=\"hidden\" name=\"";
            echo ((($context["is_edit_mode"] ?? null)) ? ("editor_process_edit") : ("editor_process_add"));
            echo "\" value=\"true\">
      <input type=\"hidden\" name=\"ajax_request\" value=\"true\">
    ";
        } else {
            // line 175
            echo "      <div class=\"card-footer\">
        <input class=\"btn btn-primary\" type=\"submit\" name=\"";
            // line 176
            echo ((($context["is_edit_mode"] ?? null)) ? ("editor_process_edit") : ("editor_process_add"));
            echo "\" value=\"";
echo _gettext("Go");
            echo "\">
      </div>
    ";
        }
        // line 179
        echo "  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "database/routines/editor_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 179,  438 => 176,  435 => 175,  428 => 172,  426 => 171,  417 => 165,  413 => 163,  406 => 159,  393 => 157,  389 => 156,  384 => 153,  375 => 148,  371 => 147,  366 => 144,  358 => 140,  354 => 138,  349 => 136,  344 => 133,  338 => 131,  334 => 129,  332 => 128,  325 => 125,  320 => 122,  318 => 121,  311 => 117,  307 => 115,  299 => 111,  295 => 109,  286 => 103,  273 => 101,  269 => 100,  262 => 95,  247 => 93,  243 => 92,  239 => 90,  232 => 86,  227 => 85,  220 => 81,  216 => 79,  211 => 78,  204 => 74,  199 => 71,  194 => 70,  187 => 67,  183 => 66,  171 => 58,  164 => 53,  160 => 52,  156 => 51,  152 => 50,  145 => 49,  137 => 43,  131 => 40,  126 => 38,  121 => 36,  115 => 34,  109 => 31,  105 => 30,  102 => 29,  100 => 28,  96 => 26,  88 => 22,  84 => 20,  76 => 15,  70 => 13,  67 => 12,  58 => 7,  53 => 5,  48 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/routines/editor_form.twig", "/Users/pad/Dev/pma/templates/database/routines/editor_form.twig");
    }
}
