<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:95:"/Users/wuyong/data/ludong/xcx/php/MWL-Dispatch/public/../application/test/view/index/index.html";i:1481555391;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <link rel="stylesheet" type="text/css" href="/semantic/components/reset.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/site.css">

  <link rel="stylesheet" type="text/css" href="/semantic/components/container.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/grid.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/header.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/image.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/menu.css">

  <link rel="stylesheet" type="text/css" href="/semantic/components/divider.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/form.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/input.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/button.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/list.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/message.css">
  <link rel="stylesheet" type="text/css" href="/semantic/components/icon.css">

  <script src="/assets/library/jquery.min.js"></script>
  <script src="/semantic/components/form.js"></script>
  <script src="/semantic/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="/assets/images/logo.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Login</div>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>

</body>

</html>
