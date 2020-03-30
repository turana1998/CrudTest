function Sil(id)
{
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      }).then(willDelete => {
        if (willDelete) {
         location.href = `index.php?sil=ok&id=${id}`;
        } else {
          swal("olmadi");
        }
      });
}
