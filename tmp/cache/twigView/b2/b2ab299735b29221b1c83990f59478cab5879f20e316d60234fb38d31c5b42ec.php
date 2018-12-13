<?php

/* /Applications/MAMP/htdocs/CRMAdministrator/vendor/cakephp/bake/src/Template/Bake/Element/form.twig */
class __TwigTemplate_b942f1a9028da47bd9d31ad0f5474efd02b804e271f419277e66b72e486839e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Applications/MAMP/htdocs/CRMAdministrator/vendor/cakephp/bake/src/Template/Bake/Element/form.twig"));

        // line 16
        $context["fields"] = $this->getAttribute(($context["Bake"] ?? null), "filterFields", array(0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["modelObject"] ?? null)), "method");
        // line 17
        echo "<div class=\"row\">
    <div class=\"col-sm-2\" id=\"actions-sidebar\">
        <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item list-group-item-action active\"><?= __('Acciones') ?></a>
            ";
        // line 21
        if ((strpos(($context["action"] ?? null), "add") === false)) {
            // line 22
            echo "            <li><?= \$this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', \$";
            // line 24
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["primaryKey"] ?? null), 0, array(), "array"), "html", null, true);
            echo "],
                ['confirm' => __('Are you sure you want to delete # {0}?', \$";
            // line 25
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["primaryKey"] ?? null), 0, array(), "array"), "html", null, true);
            echo ")]
            )
            ?></li>
            ";
        }
        // line 29
        echo "            <?= \$this->Html->link(__('List ";
        echo twig_escape_filter($this->env, ($context["pluralHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>";
        // line 30
        echo "
";
        // line 31
        $context["done"] = array();
        // line 32
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associations"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 34
                if (( !($this->getAttribute($context["details"], "controller", array()) === $this->getAttribute(($context["_view"] ?? null), "name", array())) && !twig_in_filter($this->getAttribute($context["details"], "controller", array()), ($context["done"] ?? null)))) {
                    // line 35
                    echo "            <?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                    echo "', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= \$this->Html->link(__('New ";
                    // line 36
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore(Cake\Utility\Inflector::singularize($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", array()), "html", null, true);
                    echo "', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>";
                    // line 37
                    echo "
";
                    // line 38
                    $context["done"] = twig_array_merge(($context["done"] ?? null), array(0 => $this->getAttribute($context["details"], "controller", array())));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>
    <div class=\"col-sm-10\">
        <div class=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " form large-9 medium-8 columns content\">
            <?= \$this->Form->create(\$";
        // line 46
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo ") ?>
            <fieldset>
                <legend><?= __('";
        // line 48
        echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(($context["action"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "') ?></legend>
                <?php
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter($context["field"], ($context["primaryKey"] ?? null))) {
                // line 51
                if ($this->getAttribute(($context["keyFields"] ?? null), $context["field"], array(), "array")) {
                    // line 52
                    $context["fieldData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", array(0 => $context["field"], 1 => ($context["schema"] ?? null)), "method");
                    // line 53
                    if ($this->getAttribute(($context["fieldData"] ?? null), "null", array())) {
                        // line 54
                        echo "                    echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["keyFields"] ?? null), $context["field"], array(), "array"), "html", null, true);
                        echo ", 'empty' => true], ['class' => 'form-control form-control-sm']);";
                        // line 55
                        echo "
";
                    } else {
                        // line 57
                        echo "                    echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["keyFields"] ?? null), $context["field"], array(), "array"), "html", null, true);
                        echo ", ['class' => 'form-control form-control-sm']]);";
                        // line 58
                        echo "
";
                    }
                } elseif (!twig_in_filter(                // line 60
$context["field"], array(0 => "created", 1 => "modified", 2 => "updated"))) {
                    // line 61
                    $context["fieldData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", array(0 => $context["field"], 1 => ($context["schema"] ?? null)), "method");
                    // line 62
                    if ((twig_in_filter($this->getAttribute(($context["fieldData"] ?? null), "type", array()), array(0 => "date", 1 => "datetime", 2 => "time")) && $this->getAttribute(($context["fieldData"] ?? null), "null", array()))) {
                        // line 63
                        echo "                    echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['class' => 'form-control form-control-sm'], ['empty' => true]);";
                        // line 64
                        echo "
";
                    } else {
                        // line 66
                        echo "                    echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['class' => 'form-control form-control-sm']);";
                        // line 67
                        echo "
";
                    }
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        if ($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", array())) {
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", array()));
            foreach ($context['_seq'] as $context["assocName"] => $context["assocData"]) {
                // line 74
                echo "                    echo \$this->Form->control('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "property", array()), "html", null, true);
                echo "._ids', ['options' => \$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "variable", array()), "html", null, true);
                echo "], ['class' => 'form-control form-control-sm']);";
                // line 75
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['assocName'], $context['assocData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    ";
        }
        // line 78
        echo "                ?>
             </fieldset>
            <?= \$this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= \$this->Form->end() ?>
        </div>
    </div>
</div>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/CRMAdministrator/vendor/cakephp/bake/src/Template/Bake/Element/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 78,  198 => 77,  191 => 75,  185 => 74,  181 => 73,  179 => 72,  169 => 67,  165 => 66,  161 => 64,  157 => 63,  155 => 62,  153 => 61,  151 => 60,  147 => 58,  141 => 57,  137 => 55,  131 => 54,  129 => 53,  127 => 52,  125 => 51,  120 => 50,  113 => 48,  108 => 46,  104 => 45,  99 => 42,  93 => 41,  86 => 38,  83 => 37,  78 => 36,  71 => 35,  69 => 34,  65 => 33,  60 => 32,  58 => 31,  55 => 30,  51 => 29,  42 => 25,  36 => 24,  32 => 22,  30 => 21,  24 => 17,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{% set fields = Bake.filterFields(fields, schema, modelObject) %}
<div class=\"row\">
    <div class=\"col-sm-2\" id=\"actions-sidebar\">
        <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item list-group-item-action active\"><?= __('Acciones') ?></a>
            {% if strpos(action, 'add') is same as(false) %}
            <li><?= \$this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', \${{ singularVar }}->{{ primaryKey[0] }}],
                ['confirm' => __('Are you sure you want to delete # {0}?', \${{ singularVar }}->{{ primaryKey[0] }})]
            )
            ?></li>
            {% endif %}
            <?= \$this->Html->link(__('List {{ pluralHumanName }}'), ['action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            {{- \"\\n\" }}
            {%- set done = [] %}
            {% for type, data in associations %}
            {%- for alias, details in data %}
            {%- if details.controller is not same as(_view.name) and details.controller not in done %}
            <?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index'], ['class' => 'list-group-item list-group-item-action small']) ?>
            <?= \$this->Html->link(__('New {{ alias|singularize|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add'], ['class' => 'list-group-item list-group-item-action small']) ?>
            {{- \"\\n\" }}
            {%- set done = done|merge([details.controller]) %}
            {%- endif %}
            {%- endfor %}
            {% endfor %}
        </div>
    </div>
    <div class=\"col-sm-10\">
        <div class=\"{{ pluralVar }} form large-9 medium-8 columns content\">
            <?= \$this->Form->create(\${{ singularVar }}) ?>
            <fieldset>
                <legend><?= __('{{ action|humanize }} {{ singularHumanName }}') ?></legend>
                <?php
                    {% for field in fields if field not in primaryKey %}
                    {%- if keyFields[field] %}
                    {%- set fieldData = Bake.columnData(field, schema) %}
                    {%- if fieldData.null %}
                    echo \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}, 'empty' => true], ['class' => 'form-control form-control-sm']);
                    {{- \"\\n\" }}
                    {%- else %}
                    echo \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}, ['class' => 'form-control form-control-sm']]);
                    {{- \"\\n\" }}
                    {%- endif %}
                    {%- elseif field not in ['created', 'modified', 'updated'] %}
                    {%- set fieldData = Bake.columnData(field, schema) %}
                    {%- if fieldData.type in ['date', 'datetime', 'time'] and fieldData.null %}
                    echo \$this->Form->control('{{ field }}', ['class' => 'form-control form-control-sm'], ['empty' => true]);
                    {{- \"\\n\" }}
                    {%- else %}
                    echo \$this->Form->control('{{ field }}', ['class' => 'form-control form-control-sm']);
                    {{- \"\\n\" }}
                    {%- endif %}
                    {%- endif %}
                    {%- endfor %}

                    {%- if associations.BelongsToMany %}
                    {%- for assocName, assocData in associations.BelongsToMany %}
                    echo \$this->Form->control('{{ assocData.property }}._ids', ['options' => \${{ assocData.variable }}], ['class' => 'form-control form-control-sm']);
                    {{- \"\\n\" }}
                    {%- endfor %}
                    {% endif %}
                ?>
             </fieldset>
            <?= \$this->Form->button(__('Submit'), ['class' => 'btn btn-sm btn-success']) ?>
            <?= \$this->Form->end() ?>
        </div>
    </div>
</div>
", "/Applications/MAMP/htdocs/CRMAdministrator/vendor/cakephp/bake/src/Template/Bake/Element/form.twig", "/Applications/MAMP/htdocs/CRMAdministrator/vendor/cakephp/bake/src/Template/Bake/Element/form.twig");
    }
}
