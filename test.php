<html>
  <head>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <style>
    #draggablePanelList .panel-heading {
       cursor: move;
   }
#draggablePanelList2 .panel-heading {
       cursor: move;
   }
   </style>
</head>
<script>
jQuery(function($) {
      var panelList = $('#draggablePanelList');

      panelList.sortable({
          // Only make the .panel-heading child elements support dragging.
          // Omit this to make then entire <li>...</li> draggable.
          handle: '.panel-heading',
          update: function() {
              $('.panel', panelList).each(function(index, elem) {
                   var $listItem = $(elem),
                       newIndex = $listItem.index();

                   // Persist the new indices.
              });
          }
      });
  });

  jQuery(function($) {
      var panelList2 = $('#draggablePanelList2');

      panelList2.sortable({
          // Only make the .panel-heading child elements support dragging.
          // Omit this to make then entire <li>...</li> draggable.
          handle: '.panel-heading',
          update: function() {
              $('.panel', panelList2).each(function(index, elem) {
                   var $listItem = $(elem),
                       newIndex = $listItem.index();

                   // Persist the new indices.
              });
          }
      });
  });
  </script>
  </body>
<div class="container">
  <div id="draggablePanelList2" class="">
      <div class="panel panel-default">
          <div class="panel-heading">You cand drag this panel.</div>
          <div class="panel-body">Content hedfsre ...</div>
      </div>
  <ul id="draggablePanelList" class="list-unstyled">
      <li class="panel panel-info">
          <div class="panel-heading">You can drag this panel.</div>
          <div class="panel-body">Content here ...</div>
      </li>
      <li class="panel panel-info">
          <div class="panel-heading">You can drag this panel too.</div>
          <div class="panel-body">More content here...</div>
      </li>
      <li class="panel panel-info">
          <div class="panel-heading">You can drag this panel too.</div>
          <div class="panel-body">More blah content here...</div>
      </li>
      <li class="panel panel-info">
          <div class="panel-heading">You can drag this panel too.</div>
          <div class="panel-body">Another content panel here...</div>
      </li>
  </ul>
<div class="row">
  <div class="col-xs-2">
  <div id="draggablePanelList2" class="">
      <div class="panel panel-default">
          <div class="panel-heading">You cand drag this panel.</div>
          <div class="panel-body">Content hedfsre ...</div>
      </div>
      <div class="panel panel-danger">
          <div class="panel-heading">You canfd drag this panel.</div>
          <div class="panel-body">Content hdsfere ...</div>
      </div>
  </div>
    </div><!--end col-->
  </div><!--end row-->
</div>
  </body>
</html>
