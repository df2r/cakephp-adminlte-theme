<footer class="main-footer">
  <?php if (isset($layout) && $layout == 'top'): ?>
  <div class="container">
  <?php endif; ?>
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0.1
    </div>
    <strong>Copyright &copy; 2022-<?= date("Y");?> <a href="https://evidenciasenpediatria.es" target="_blank">Evidencias en Pediatria</a>.</strong> All rights reserved.
  <?php if (isset($layout) && $layout == 'top'): ?>
  </div>
  <?php endif; ?>
</footer>
