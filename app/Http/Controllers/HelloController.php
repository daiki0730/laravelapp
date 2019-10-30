<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class HelloController extends Controller {

  public function __invoke() {

    return <<<EOF
<head>
  <title>Hello</title>
<style>
body {font-size:16pt; color: #999;}
h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0 -50px 0px; }
</style>
</head>

<body>
  <h1>single action</h1>
  <p>これはシングルアクションコントローラのアクションです</p>
</body>
</html>
EOF;

  }
}

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body {font-size:16pt; color: #999;}
// h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0 -50px 0px; }
// </style>
// EOF;
// $body ='</head><body>';
// $end ='</body></html>';

// function tag($tag,$txt) {

//   return "<{$tag}>" . $txt . "</{$tag}>";
// }

// class HelloController extends Controller {

//   public function index() {

//     global $head, $style, $body, $end;

//     $html = $head . tag('title','Hello/Index') . $style . $body . tag('h1','Index')
//       . tag('p','this is Index page')
//       . '<a href="/hello/other">go to other page</a>'
//       . $end;

//     return $html;
//   }

//   public function other() {

//     global $head, $style, $body, $end;

//     $html = $head . tag('title','Hello/Other') . $style . $body
//       . tag('h1','Other') . tag('p','this is Other page')
//       . $end;
//     return $html;
//   }
// }
