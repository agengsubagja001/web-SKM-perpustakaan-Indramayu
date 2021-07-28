<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class perpanjangkta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url('auth/login'));
        }
        $this->load->model('admin/m_perpanjangkta');
    }

    public function index()
    {
        if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if ($filter == '1') { // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $label = 'Data Perpanjang KTA Tanggal ' . date('d-m-y', strtotime($tgl));
                $url_export = 'admin/perpanjangkta/export?filter=1&tanggal=' . $tgl;
                $transaksi = $this->m_perpanjangkta->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel
            } else if ($filter == '2') { // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

                $label = 'Data Perpanjang KTA Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
                $url_export = 'admin/perpanjangkta/export?filter=2&bulan=' . $bulan . '&tahun=' . $tahun;
                $transaksi = $this->m_perpanjangkta->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            } else { // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $label = 'Data Perpanjang KTA Tahun ' . $tahun;
                $url_export = 'admin/perpanjangkta/export?filter=3&tahun=' . $tahun;
                $transaksi = $this->m_perpanjangkta->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        } else { // Jika user tidak mengklik tombol tampilkan
            $label = 'Semua Data Perpanjang KTA';
            $url_export = 'admin/perpanjangkta/export';
            $transaksi = $this->m_perpanjangkta->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }

        $data['label'] = $label;
        $data['url_export'] = base_url('index.php/' . $url_export);
        $data['transaksi'] = $transaksi;
        $data['option_tahun'] = $this->m_perpanjangkta->option_tahun();
        $this->load->view('admin/perpanjangkta', $data);
    }

    public function export()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        // Panggil class PHPExcel nya
        $excel = new PHPExcel();

        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Perpustakaan Indramayu')
            ->setLastModifiedBy('Perpustakaan Perpanjang KTA')
            ->setTitle("Data Perpanjang KTA")
            ->setSubject("Perpanjang KTA")
            ->setDescription("Laporan Semua Data Perpanjang KTA")
            ->setKeywords("Data Perpanjang KTA");

        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if ($filter == '1') { // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $label = 'Data Perpanjang KTA Tanggal ' . date('d-m-y', strtotime($tgl));
                $transaksi = $this->m_perpanjangkta->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel
            } else if ($filter == '2') { // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

                $label = 'Data Perpanjang KTA Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
                $transaksi = $this->m_perpanjangkta->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            } else { // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $label = 'Data Perpanjang KTA Tahun ' . $tahun;
                $transaksi = $this->m_perpanjangkta->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        } else { // Jika user tidak mengklik tombol tampilkan
            $label = 'Semua Data Perpanjang KTA';
            $transaksi = $this->m_perpanjangkta->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }

        $excel->setActiveSheetIndex(0);
        $excel->getActiveSheet()->setCellValue('A1', "Perpanjang KTA"); // Set kolom A1 dengan tulisan "DATA MEMBER"
        $excel->getActiveSheet()->mergeCells('A1:N1'); // Set Merge Cell pada kolom A1 sampai E1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1

        $excel->getActiveSheet()->setCellValue('A2', $label); // Set kolom A2 sesuai dengan yang pada variabel $label
        $excel->getActiveSheet()->mergeCells('A2:N2'); // Set Merge Cell pada kolom A2 sampai E2

        // Buat header tabel nya pada baris ke 4
        $excel->getActiveSheet()->setCellValue('A4', "Umur"); // Set kolom A4 dengan tulisan "Tanggal"
        $excel->getActiveSheet()->setCellValue('B4', "JK"); // Set kolom B4 dengan tulisan "Kode Transaksi"
        $excel->getActiveSheet()->setCellValue('C4', "Pendidikan"); // Set kolom C4 dengan tulisan "Barang"
        $excel->getActiveSheet()->setCellValue('D4', "Pekerjaan"); // Set kolom D4 dengan tulisan "Jumlah"
        $excel->getActiveSheet()->setCellValue('E4', "Q1"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('F4', "Q2"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('G4', "Q3"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('H4', "Q4"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('I4', "Q5"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('J4', "Q6"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('K4', "Q7"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('L4', "Q8"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('M4', "Q9"); // Set kolom E4 dengan tulisan "Total Harga"
        $excel->getActiveSheet()->setCellValue('N4', "Waktu"); // Set kolom E4 dengan tulisan "Total Harga"

        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $excel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M4')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N4')->applyFromArray($style_col);

        // Set height baris ke 1, 2, 3 dan 4
        $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('4')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('6')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('7')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('8')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('9')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('10')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('11')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('12')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('13')->setRowHeight(20);
        $excel->getActiveSheet()->getRowDimension('14')->setRowHeight(20);

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 5

        foreach ($transaksi as $data) { // Lakukan looping pada variabel transaksi
            $waktu = date('d-m-Y', strtotime($data->waktu)); // Ubah format tanggal jadi dd-mm-yyyy

            $excel->getActiveSheet()->setCellValue('A' . $numrow, $data->umur);
            $excel->getActiveSheet()->setCellValue('B' . $numrow, $data->jk);
            $excel->getActiveSheet()->setCellValue('C' . $numrow, $data->pendidikan);
            $excel->getActiveSheet()->setCellValue('D' . $numrow, $data->pekerjaan);
            $excel->getActiveSheet()->setCellValue('E' . $numrow, $data->q1);
            $excel->getActiveSheet()->setCellValue('F' . $numrow, $data->q2);
            $excel->getActiveSheet()->setCellValue('G' . $numrow, $data->q3);
            $excel->getActiveSheet()->setCellValue('H' . $numrow, $data->q4);
            $excel->getActiveSheet()->setCellValue('I' . $numrow, $data->q5);
            $excel->getActiveSheet()->setCellValue('J' . $numrow, $data->q6);
            $excel->getActiveSheet()->setCellValue('K' . $numrow, $data->q7);
            $excel->getActiveSheet()->setCellValue('L' . $numrow, $data->q8);
            $excel->getActiveSheet()->setCellValue('M' . $numrow, $data->q9);
            $excel->getActiveSheet()->setCellValue('N' . $numrow, $waktu);

            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row);

            $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);

            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }

        // Set width kolom
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(6); // Set width kolom A
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(5); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(12); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(12); // Set width kolom D
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(5); // Set width kolom E
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(12); // Set width kolom E

        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

        // Set judul file excel nya
        $excel->getActiveSheet()->setTitle("Laporan Data Perpanjang KTA");
        $excel->getActiveSheet();

        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Perpanjangkta.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');

        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }
}
