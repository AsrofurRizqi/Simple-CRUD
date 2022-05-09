<table id="tabeldata" class="table table-striped text-center" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Merek</th>
            <th>Nomor Seri</th>
            <th>Tahun Dibuat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="tabelisi">

        <?php
        $sql = "select * from laptop where merek like '".$data."' OR serial like '".$data."' OR tahun_produksi like '".$data."'";
        $result = pg_query($sql);
        $no=1;

        while($row = pg_fetch_object($result)): 
        ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->merek ?></td>
                    <td><?= $row->serial ?></td>
                    <td><?= $row->tahun_produksi ?></td>
                    <td>
        <?php echo '<a class="btn btn-danger mx-3" href="./backend/hapus.php?id='.$row->id.'"><i class="fa-solid fa-trash-can"></i></a>'?><?php echo '<a class="btn btnubah" href="./frontend/ubah.php?id='.$row->id .'"><i class="fa-solid fa-pencil"></i></a>'?>
                    </td>
                </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<div class="row">
<div class="col-md-10 pagination-container" >
	<nav>
		<ul class="pagination">
            <li data-page="prev" >
				<span> < <span class="sr-only">(current)</span></span>
			</li>
				   <!--	Here the JS Function Will Add the Rows -->
        <li data-page="next" id="prev">
				<span> > <span class="sr-only">(current)</span></span>
			</li>
		</ul>
	</nav>
</div>
<div class="col-md-2">
    <select class  ="form-control" name="state" id="maxRows">
						 <option value="5000">Show ALL Rows</option>
						 <option value="5">5</option>
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
	</select>
</div>