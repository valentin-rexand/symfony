<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_98394c511121228d53c2e7088af2bffb86cf0d898a7fa5ed95e9944f337122b2 extends Twig_Template
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
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  118 => 49,  100 => 39,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  297 => 179,  295 => 178,  205 => 108,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  202 => 94,  188 => 102,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  351 => 192,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  303 => 122,  300 => 180,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  226 => 84,  207 => 75,  200 => 72,  185 => 66,  181 => 65,  165 => 83,  153 => 77,  150 => 55,  113 => 48,  389 => 160,  386 => 159,  380 => 206,  378 => 157,  371 => 156,  367 => 198,  363 => 153,  361 => 195,  358 => 151,  353 => 193,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 135,  315 => 125,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 176,  281 => 114,  276 => 111,  274 => 110,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  248 => 94,  232 => 88,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  197 => 104,  194 => 70,  191 => 67,  184 => 101,  178 => 66,  175 => 65,  172 => 64,  170 => 96,  155 => 47,  152 => 46,  134 => 54,  97 => 41,  127 => 35,  110 => 22,  90 => 26,  76 => 31,  84 => 40,  70 => 19,  58 => 25,  81 => 23,  53 => 12,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 189,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 174,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 56,  135 => 62,  119 => 40,  102 => 40,  67 => 24,  63 => 19,  77 => 20,  71 => 17,  65 => 18,  59 => 11,  23 => 1,  201 => 106,  196 => 92,  183 => 82,  171 => 61,  166 => 95,  163 => 82,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 54,  136 => 71,  121 => 50,  117 => 19,  105 => 34,  91 => 27,  62 => 12,  49 => 14,  38 => 7,  87 => 34,  31 => 3,  25 => 35,  94 => 21,  89 => 19,  85 => 23,  75 => 17,  68 => 30,  56 => 11,  21 => 2,  26 => 9,  28 => 3,  24 => 3,  19 => 1,  93 => 27,  88 => 31,  78 => 26,  46 => 13,  44 => 9,  27 => 3,  79 => 21,  72 => 17,  69 => 16,  47 => 21,  40 => 6,  37 => 5,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 45,  96 => 37,  83 => 33,  74 => 27,  66 => 24,  55 => 16,  52 => 10,  50 => 22,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 57,  112 => 42,  109 => 52,  106 => 51,  103 => 32,  99 => 31,  95 => 28,  92 => 43,  86 => 28,  82 => 19,  80 => 32,  73 => 33,  64 => 23,  60 => 21,  57 => 12,  54 => 10,  51 => 9,  48 => 9,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
