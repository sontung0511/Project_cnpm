using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Proj_CNPM
{
    public partial class MainForm : Form
    {
        public MainForm()
        {
            InitializeComponent();
        }

        SQLConfig config = new SQLConfig();
        usableFunction funct = new usableFunction();
        string sql;
        int maxcolumn;
        int inc = 0;
        int maxrow;

        private void select_navigation(string sql)
        {
            config.singleResult(sql);
            maxrow = config.dt.Rows.Count;
        }

        public void navigate_records(int inc)
        {
            config.singleResult("SELECT * FROM `tbl_sanpham`");
            txtitemid.Text = config.dt.Rows[inc].Field<string>("id_sanpham");
            txtname.Text = config.dt.Rows[inc].Field<string>("tensanpham");
            txtdescription.Text = config.dt.Rows[inc].Field<string>("tomtat");
            txtprice.Text = config.dt.Rows[inc].Field<string>("giasp");
            cbotype.Text = config.dt.Rows[inc].Field<string>("id_danhmuc");
            //txtqty.Text = config.dt.Rows[inc].Field<int>("Quantity").ToString();
            


        }

        private void btnNew_Click(object sender, EventArgs e)
        {
            inc = 0;

            sql = "SELECT * FROM tbl_sanpham";
            config.Load_DTG(sql, dtglist);

            maxcolumn = dtglist.Columns.Count - 1;

            dtglist.Columns[maxcolumn].Visible = false;

            btnadd.Visible = false;

            select_navigation("SELECT id_sanpham FROM tbl_sanpham");
           
            sql = "SELECT id_danhmuc FROM `tbl_sanpham`";
            config.fiil_CBO(sql, cbotype);

       
            funct.clearTxt(panel1);

        }

        private void btnSave_Click(object sender, EventArgs e)
        {
            foreach (Control obj in panel1.Controls)
            {
                if (obj is TextBox)
                {
                    if (obj.Text == "")
                    {
                        MessageBox.Show("Action connot be perform. All fields are required to be fill up.", "Invalid", MessageBoxButtons.OK, MessageBoxIcon.Exclamation);
                        return;
                    }
                }
            }


            sql = "SELECT id_sanpham FROM tbl_sanpham WHERE id_sanpham='" + txtitemid.Text + "'";
            config.singleResult(sql);
            if (config.dt.Rows.Count > 0)
            {
                sql = "UPDATE tbl_sanpham SET soluong =soluong + '" + txtqty.Text + "' WHERE id_sanpham ='" + txtitemid.Text + "'";
                config.Execute_Query(sql);
            }
            else
            {
                sql = "insert into tbl_sanpham  (`id_sanpham`,`tensanpham`, `tomtat`, `id_danhmuc`, `giasp`, `soluong`)" +
                   "VALUES ('" + txtitemid.Text + "','" + txtname.Text + "','" + txtdescription.Text + "','" + cbotype.Text
                   + "','" + txtprice.Text + "','" + txtqty.Text + "' )";
                config.Execute_CUD(sql, "No data saved.", "Data has been saved in the database.");

              
            }

            btnNew_Click(sender, e);
        }
        private void btnupdate_Click(object sender, EventArgs e)
        {
            sql = "UPDATE tbl_sanpham SET `tensanpham`='" + txtname.Text + "', `tomtat`='" + txtdescription.Text + "', `id_danhmuc`='" + cbotype.Text + "', `giasp`='" + txtprice.Text +"' WHERE id_sanpham='" + txtitemid.Text + "'";
            config.Execute_CUD(sql, "Error to update", "Data has been updated in the database");
            btnNew_Click(sender, e);
        }
        private void btndelete_Click(object sender, EventArgs e)
        {
            sql = "DELETE FROM tbl_sanpham WHERE id_sanpham='" + dtglist.CurrentRow.Cells[0].Value + "'";
            config.Execute_CUD(sql, "error to delete", "Data has been deleted.");
            btnNew_Click(sender, e);
        }

    }
}
