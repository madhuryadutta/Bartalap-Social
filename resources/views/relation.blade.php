<?php
// (A) LOAD RELATIONSHIP LIBRARY + SET CURRENT USER
// @TODO - TIE INTO YOUR OWN USER SYSTEM & SESSION
require "2-lib-relation.php";
$uid = 1;

// (B) PROCESS RELATIONSHIP REQUEST
if (isset($_POST["req"])) {
    $pass = true;
    switch ($_POST["req"]) {
            // (B0) INVALID
        default:
            $pass = false;
            $REL->error = "Invalid request";
            break;
            // (B1) ADD FRIEND
        case "add":
            $pass = $REL->request($uid, $_POST["id"]);
            break;
            // (B2) ACCEPT FRIEND
        case "accept":
            $pass = $REL->acceptReq($_POST["id"], $uid);
            break;
            // (B3) CANCEL ADD
        case "cancel":
            $pass = $REL->cancelReq($uid, $_POST["id"]);
            break;
            // (B4) UNFRIEND
        case "unfriend":
            $pass = $REL->unfriend($uid, $_POST["id"], false);
            break;
            // (B5) BLOCK
        case "block":
            $pass = $REL->block($uid, $_POST["id"]);
            break;
            // (B6) UNBLOCK
        case "unblock":
            $pass = $REL->block($uid, $_POST["id"], false);
            break;
    }
    echo $pass ? "<div class='ok'>OK</div>" : "<div class='nok'>{$REL->error}</div>";
}

// (C) GET + SHOW ALL USERS
$users = $REL->getUsers(); ?>
<!-- (C1) CURRENT USER -->
<div id="userNow" class="flex">
    <div><img src="funny.png"></div>
    <div>
        <small>you are:</small><br>
        <strong><?= $users[$uid] ?></strong>
    </div>
</div>

<!-- (C2) USER LIST -->
<div id="userList"><?php
                    $requests = $REL->getReq($uid);
                    $friends = $REL->getFriends($uid);
                    foreach ($users as $id => $name) {
                        if ($id != $uid) {
                            echo "<div class='uRow flex'>";
                            // (C2-1) USER ID & NAME
                            echo "<div class='uName'>$id) $name</div>";

                            // (C2-2) BLOCK/UNBLOCK
                            if (isset($friends["b"][$id])) {
                                echo "<button onclick=\"relate('unblock', $id)\">Unblock</button>";
                            } else {
                                echo "<button onclick=\"relate('block', $id)\">Block</button>";
                            }

                            // (C2-3) FRIEND STATUS
                            // FRIENDS
                            if (isset($friends["f"][$id])) {
                                echo "<button onclick=\"relate('unfriend', $id)\">Unfriend</button>";
                            }
                            // INCOMING FRIEND REQUEST
                            else if (isset($requests["in"][$id])) {
                                echo "<button onclick=\"relate('accept', $id)\">Accept Friend</button>";
                            }
                            // OUTGOING FRIEND REQUEST
                            else if (isset($requests["out"][$id])) {
                                echo "<button onclick=\"relate('cancel', $id)\">Cancel Add</button>";
                            }
                            // STRANGERS
                            else {
                                echo "<button onclick=\"relate('add', $id)\">Add Friend</button>";
                            }
                            echo "</div>";
                        }
                    }
                    ?></div>

<!-- (D) NINJA RELATIONSHIP FORM -->
<form id="ninform" method="post" target="_self">
    <input type="hidden" name="req" id="ninreq">
    <input type="hidden" name="id" id="ninid">
</form>