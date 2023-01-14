<?php include '../include/header.php'; ?>
<form method="post" action="login_auth.php">
    <div class="form-item"><label>Username</label>
        <div class="input-wrapper"><input type="text" name="username" id="username" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" data-lpignore="true" /></div>
    </div>
    <div class="form-item"><label>Password</label>
        <div class="input-wrapper"><input type="password" name="password" id="password" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" data-lpignore="true" /><button type="button" id="eyeball">
                <div class="eye"></div>
            </button>
            <div id="beam"></div>
        </div>
    </div><button id="submit">Sign in</button>
</form>
  <?php include '../include/footer.php'; ?>
