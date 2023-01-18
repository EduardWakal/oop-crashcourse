<form action="src/Handlers/SaveCharacter.php" method="post" class="form-container">
    <h3>Create your character</h3>
    <div class="form-group">
        <label for="name">Character Name:</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="class">Character Class:</label>
        <input type="text" id="class" name="class" class="form-control">
    </div>
    <div class="form-group">
        <label for="level">Character Level:</label>
        <input type="number" id="level" name="level" class="form-control">
    </div>

    <h3>Character stats</h3>
    <div class="form-group">
        <label for="stats[strength]">Strength:</label>
        <input type="number" id="stats[strength]" name="stats[strength]" class="form-control">
    </div>
    <div class="form-group">
        <label for="stats[intelligence]">Intelligence:</label>
        <input type="number" id="stats[intelligence]" name="stats[intelligence]" class="form-control">
    </div>
    <div class="form-group">
        <label for="stats[dexterity]">Dexterity:</label>
        <input type="number" id="stats[dexterity]" name="stats[dexterity]" class="form-control">
    </div>

    <input type="submit" value="Submit" class="btn btn-primary">
</form>
<?php
?>
<div class="created-characters">
    <?php include 'src/Handlers/CharacterDisplayerHandler.php'; ?>
</div>