
namespace Proj_CNPM
{
    partial class MainForm
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.labelitemid = new System.Windows.Forms.Label();
            this.labelitemname = new System.Windows.Forms.Label();
            this.labeldesc = new System.Windows.Forms.Label();
            this.labelcatalog = new System.Windows.Forms.Label();
            this.labelQuantity = new System.Windows.Forms.Label();
            this.labelprice = new System.Windows.Forms.Label();
            this.txtqty = new System.Windows.Forms.TextBox();
            this.panel1 = new System.Windows.Forms.Panel();
            this.txtdescription = new System.Windows.Forms.TextBox();
            this.txtname = new System.Windows.Forms.TextBox();
            this.txtitemid = new System.Windows.Forms.TextBox();
            this.txtprice = new System.Windows.Forms.TextBox();
            this.btnSave = new System.Windows.Forms.Button();
            this.btnNew = new System.Windows.Forms.Button();
            this.btnDelete = new System.Windows.Forms.Button();
            this.btnUpdate = new System.Windows.Forms.Button();
            this.cbotype = new System.Windows.Forms.ComboBox();
            this.dtglist = new System.Windows.Forms.DataGridView();
            this.label2 = new System.Windows.Forms.Label();
            this.txtsearch = new System.Windows.Forms.TextBox();
            this.btnadd = new System.Windows.Forms.Button();
            this.lblinc = new System.Windows.Forms.Label();
            this.lblmax = new System.Windows.Forms.Label();
            this.panel1.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dtglist)).BeginInit();
            this.SuspendLayout();
            // 
            // labelitemid
            // 
            this.labelitemid.AutoSize = true;
            this.labelitemid.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F, System.Drawing.FontStyle.Bold);
            this.labelitemid.Location = new System.Drawing.Point(48, 36);
            this.labelitemid.Name = "labelitemid";
            this.labelitemid.Size = new System.Drawing.Size(66, 20);
            this.labelitemid.TabIndex = 0;
            this.labelitemid.Text = "Item Id";
            // 
            // labelitemname
            // 
            this.labelitemname.AutoSize = true;
            this.labelitemname.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F, System.Drawing.FontStyle.Bold);
            this.labelitemname.Location = new System.Drawing.Point(48, 77);
            this.labelitemname.Name = "labelitemname";
            this.labelitemname.Size = new System.Drawing.Size(99, 20);
            this.labelitemname.TabIndex = 1;
            this.labelitemname.Text = "Item Name";
            // 
            // labeldesc
            // 
            this.labeldesc.AutoSize = true;
            this.labeldesc.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F, System.Drawing.FontStyle.Bold);
            this.labeldesc.Location = new System.Drawing.Point(48, 124);
            this.labeldesc.Name = "labeldesc";
            this.labeldesc.Size = new System.Drawing.Size(106, 20);
            this.labeldesc.TabIndex = 2;
            this.labeldesc.Text = "Description";
            // 
            // labelcatalog
            // 
            this.labelcatalog.AutoSize = true;
            this.labelcatalog.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F, System.Drawing.FontStyle.Bold);
            this.labelcatalog.Location = new System.Drawing.Point(625, 40);
            this.labelcatalog.Name = "labelcatalog";
            this.labelcatalog.Size = new System.Drawing.Size(82, 20);
            this.labelcatalog.TabIndex = 3;
            this.labelcatalog.Text = "Catalogy";
            // 
            // labelQuantity
            // 
            this.labelQuantity.AutoSize = true;
            this.labelQuantity.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F, System.Drawing.FontStyle.Bold);
            this.labelQuantity.Location = new System.Drawing.Point(628, 124);
            this.labelQuantity.Name = "labelQuantity";
            this.labelQuantity.Size = new System.Drawing.Size(79, 20);
            this.labelQuantity.TabIndex = 4;
            this.labelQuantity.Text = "Quantity";
            // 
            // labelprice
            // 
            this.labelprice.AutoSize = true;
            this.labelprice.Font = new System.Drawing.Font("Microsoft Sans Serif", 10F, System.Drawing.FontStyle.Bold);
            this.labelprice.Location = new System.Drawing.Point(628, 79);
            this.labelprice.Name = "labelprice";
            this.labelprice.Size = new System.Drawing.Size(53, 20);
            this.labelprice.TabIndex = 5;
            this.labelprice.Text = "Price";
            // 
            // txtqty
            // 
            this.txtqty.Location = new System.Drawing.Point(742, 122);
            this.txtqty.Name = "txtqty";
            this.txtqty.Size = new System.Drawing.Size(184, 22);
            this.txtqty.TabIndex = 6;
            // 
            // panel1
            // 
            this.panel1.AutoScroll = true;
            this.panel1.AutoSize = true;
            this.panel1.BackColor = System.Drawing.SystemColors.ControlLightLight;
            this.panel1.Controls.Add(this.cbotype);
            this.panel1.Controls.Add(this.txtprice);
            this.panel1.Controls.Add(this.txtitemid);
            this.panel1.Controls.Add(this.txtname);
            this.panel1.Controls.Add(this.txtdescription);
            this.panel1.Controls.Add(this.txtqty);
            this.panel1.Controls.Add(this.labelprice);
            this.panel1.Controls.Add(this.labelQuantity);
            this.panel1.Controls.Add(this.labelcatalog);
            this.panel1.Controls.Add(this.labeldesc);
            this.panel1.Controls.Add(this.labelitemname);
            this.panel1.Controls.Add(this.labelitemid);
            this.panel1.Location = new System.Drawing.Point(0, 1);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(1041, 239);
            this.panel1.TabIndex = 7;
            // 
            // txtdescription
            // 
            this.txtdescription.Location = new System.Drawing.Point(160, 124);
            this.txtdescription.Name = "txtdescription";
            this.txtdescription.Size = new System.Drawing.Size(277, 22);
            this.txtdescription.TabIndex = 7;
            // 
            // txtname
            // 
            this.txtname.Location = new System.Drawing.Point(160, 75);
            this.txtname.Name = "txtname";
            this.txtname.Size = new System.Drawing.Size(277, 22);
            this.txtname.TabIndex = 8;
            // 
            // txtitemid
            // 
            this.txtitemid.Location = new System.Drawing.Point(160, 36);
            this.txtitemid.Name = "txtitemid";
            this.txtitemid.Size = new System.Drawing.Size(277, 22);
            this.txtitemid.TabIndex = 9;
            // 
            // txtprice
            // 
            this.txtprice.Location = new System.Drawing.Point(742, 77);
            this.txtprice.Name = "txtprice";
            this.txtprice.Size = new System.Drawing.Size(184, 22);
            this.txtprice.TabIndex = 10;
            // 
            // btnSave
            // 
            this.btnSave.Location = new System.Drawing.Point(25, 246);
            this.btnSave.Name = "btnSave";
            this.btnSave.Size = new System.Drawing.Size(89, 29);
            this.btnSave.TabIndex = 8;
            this.btnSave.Text = "Save";
            this.btnSave.UseVisualStyleBackColor = true;
            this.btnSave.Click += new System.EventHandler(this.btnSave_Click);
            // 
            // btnNew
            // 
            this.btnNew.Location = new System.Drawing.Point(497, 246);
            this.btnNew.Name = "btnNew";
            this.btnNew.Size = new System.Drawing.Size(89, 29);
            this.btnNew.TabIndex = 9;
            this.btnNew.Text = "Load";
            this.btnNew.UseVisualStyleBackColor = true;
            this.btnNew.Click += new System.EventHandler(this.btnNew_Click);
            // 
            // btnDelete
            // 
            this.btnDelete.Location = new System.Drawing.Point(337, 246);
            this.btnDelete.Name = "btnDelete";
            this.btnDelete.Size = new System.Drawing.Size(89, 29);
            this.btnDelete.TabIndex = 10;
            this.btnDelete.Text = "Delete";
            this.btnDelete.UseVisualStyleBackColor = true;
            // 
            // btnUpdate
            // 
            this.btnUpdate.Location = new System.Drawing.Point(183, 246);
            this.btnUpdate.Name = "btnUpdate";
            this.btnUpdate.Size = new System.Drawing.Size(89, 29);
            this.btnUpdate.TabIndex = 11;
            this.btnUpdate.Text = "Update";
            this.btnUpdate.UseVisualStyleBackColor = true;
            // 
            // cbotype
            // 
            this.cbotype.FormattingEnabled = true;
            this.cbotype.Location = new System.Drawing.Point(742, 36);
            this.cbotype.Name = "cbotype";
            this.cbotype.Size = new System.Drawing.Size(184, 24);
            this.cbotype.TabIndex = 12;
            // 
            // dtglist
            // 
            this.dtglist.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dtglist.EditMode = System.Windows.Forms.DataGridViewEditMode.EditProgrammatically;
            this.dtglist.Location = new System.Drawing.Point(-57, 317);
            this.dtglist.Name = "dtglist";
            this.dtglist.RowHeadersWidth = 51;
            this.dtglist.RowTemplate.Height = 24;
            this.dtglist.Size = new System.Drawing.Size(1098, 434);
            this.dtglist.TabIndex = 12;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(500, 292);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(57, 17);
            this.label2.TabIndex = 13;
            this.label2.Text = "Search:";
            // 
            // txtsearch
            // 
            this.txtsearch.Location = new System.Drawing.Point(556, 289);
            this.txtsearch.Name = "txtsearch";
            this.txtsearch.Size = new System.Drawing.Size(467, 22);
            this.txtsearch.TabIndex = 14;
            // 
            // btnadd
            // 
            this.btnadd.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.btnadd.Location = new System.Drawing.Point(487, 376);
            this.btnadd.Margin = new System.Windows.Forms.Padding(4);
            this.btnadd.Name = "btnadd";
            this.btnadd.Size = new System.Drawing.Size(88, 22);
            this.btnadd.TabIndex = 15;
            this.btnadd.Text = "Add";
            this.btnadd.UseVisualStyleBackColor = true;
            // 
            // lblinc
            // 
            this.lblinc.AutoSize = true;
            this.lblinc.Location = new System.Drawing.Point(12, 289);
            this.lblinc.Name = "lblinc";
            this.lblinc.Size = new System.Drawing.Size(0, 17);
            this.lblinc.TabIndex = 16;
            // 
            // lblmax
            // 
            this.lblmax.AutoSize = true;
            this.lblmax.Location = new System.Drawing.Point(357, 290);
            this.lblmax.Name = "lblmax";
            this.lblmax.Size = new System.Drawing.Size(0, 17);
            this.lblmax.TabIndex = 17;
            // 
            // MainForm
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(998, 753);
            this.Controls.Add(this.lblmax);
            this.Controls.Add(this.lblinc);
            this.Controls.Add(this.txtsearch);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.dtglist);
            this.Controls.Add(this.btnUpdate);
            this.Controls.Add(this.btnDelete);
            this.Controls.Add(this.btnNew);
            this.Controls.Add(this.btnSave);
            this.Controls.Add(this.panel1);
            this.Controls.Add(this.btnadd);
            this.Name = "MainForm";
            this.Text = "MainForm";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.dtglist)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label labelitemid;
        private System.Windows.Forms.Label labelitemname;
        private System.Windows.Forms.Label labeldesc;
        private System.Windows.Forms.Label labelcatalog;
        private System.Windows.Forms.Label labelQuantity;
        private System.Windows.Forms.Label labelprice;
        private System.Windows.Forms.TextBox txtqty;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.ComboBox cbotype;
        private System.Windows.Forms.TextBox txtprice;
        private System.Windows.Forms.TextBox txtitemid;
        private System.Windows.Forms.TextBox txtname;
        private System.Windows.Forms.TextBox txtdescription;
        private System.Windows.Forms.Button btnSave;
        private System.Windows.Forms.Button btnNew;
        private System.Windows.Forms.Button btnDelete;
        private System.Windows.Forms.Button btnUpdate;
        private System.Windows.Forms.DataGridView dtglist;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtsearch;
        internal System.Windows.Forms.Button btnadd;
        private System.Windows.Forms.Label lblinc;
        private System.Windows.Forms.Label lblmax;
    }
}