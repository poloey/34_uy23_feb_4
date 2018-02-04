<?php require 'header.php'; ?>


<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h2>All teachers</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Created at</th>
        </tr>
        <?php foreach ($teachers as $teacher): ?>
          <tr>
            <td><?= $teacher->name ?></td>
            <td><?= $teacher->email ?></td>
            <td><?= Carbon\Carbon::parse($teacher->created_at)->diffForHumans() ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>
  </div>
</div>



<?php require 'footer.php'; ?>


