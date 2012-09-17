<?php
  header('Content-type: application/x-java-jnlp-file');
  print '<?xml version="1.0" encoding="utf-8"?' . ">\n"
?>
<jnlp codebase="http://<?php print $_SERVER['HTTP_HOST'] . ereg_replace("[^/]*$", "", $_SERVER['SCRIPT_NAME']) ?>">
  <information>
    <title>Telehash Chat</title>
    <vendor>Clojure Telehash</vendor>
    <description>Sample Chat Application from Clojure Telehash Project</description>
    <homepage href="https://www.assembla.com/code/clj-telehash/git/nodes"/>
    <!-- <icon href="little_state.png"/> -->
    <!-- <offline-allowed/> -->
  </information>

  <security>
    <all-permissions/>
  </security>

  <!-- A .htaccess causes these to redirect to http://www.ibiblio.org/maven/ -->
  <resources>
    <j2se version="1.4+"/>
    <jar href="lib/telehash/jar"/>
    <jar href="lib/telehash/clojure/jar"/>
    <jar href="lib/telehash/clojure/chat/jar"/>
    <jar href="lib/orientDB/core/jar"/>
    <jar href="lib/orientDB/common/jar"/>
    <jar href="lib/orientDB/tools/jar"/>
    <jar href="lib/netbeans/modules/AbsoluteLayout/jar"/>
    <!-- <jar href="rhino/jars/js-1.6R2.jar"/> -->
  </resources>

  <?php
    $image = 'http://' . $_SERVER['HTTP_HOST'];
    if(!ereg('^/', $_GET['svg']))
      $image .= ereg_replace("[^/]*$", "", $_SERVER['SCRIPT_NAME']);
    $qIndex = strpos($_GET['svg'], "?");
    if(!$qIndex) {
      $image .= $_GET['svg'];
    } else {
      $image .= substr($_GET['svg'], 0, $qIndex) . "?" . ereg_replace(" ", "+", substr($_GET['svg'], $qIndex + 1));
    }
  ?>

  <application-desc main-class="telehash.samples.simplechat.Main">
    <argument><?php print $image ?></argument>
  </application-desc>
</jnlp>
