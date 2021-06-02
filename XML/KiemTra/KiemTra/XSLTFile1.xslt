<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:msxsl="urn:schemas-microsoft-com:xslt" exclude-result-prefixes="msxsl"
>
	<xsl:output method="html" />

	<xsl:template match="/">
		<html>
			<head>
				<title>PHIEU XUAT KHO</title>
			</head>
			<body>
				<xsl:for-each select="pxk/ttpxk">
					<p>
						Đơn Vị: <xsl:value-of select="DonVi"/>
					</p>
					<p>
						Bộ Phận: <xsl:value-of select="BoPhan"/>
					</p>
					<h1>Phieu Xuat Kho</h1>
					<p>
						Ngày: <xsl:value-of select="Ngay"/>
					</p>
					<p>
						Số: <xsl:value-of select="So"/>
					</p>
					<p>
						Nợ: <xsl:value-of select="No"/>
					</p>
					<p>
						Có: <xsl:value-of select="Co"/>
					</p>
					<p>
						Tên Người Nhận: <xsl:value-of select="TenNguoiNhan"/>
					</p>
					<p>
						Bộ Phận Người Nhận: <xsl:value-of select="BoPhanNguoiNhan"/>
					</p>
					<p>
						Lý Do: <xsl:value-of select="LyDo"/>
					</p>
					<p>
						Tên Kho Xuất: <xsl:value-of select="TenKhoXuat"/>
					</p>
					<p>
						Địa Điểm Kho Xuất: <xsl:value-of select="DiaDiemKhoXuat"/>
					</p>
				<table border="1">
					<tr>
						<th rowspan="2">STT</th>
						<th rowspan="2">Ten Hang</th>
						<th rowspan="2">Ma So</th>
						<th rowspan="2">Dơn Vị Tính</th>
						<th colspan="2">Số Lượng</th>
						<th rowspan="2">Dơn Giá</th>
						<th rowspan="2">Thành Tiền</th>
						<tr>
							<th>Yêu Cầu</th>
							<th>Thực xuất</th>
						</tr>
					</tr>
					<xsl:for-each select="HangXuat">
						
						<tr>
							<td>
								<xsl:value-of select="STT"/>
							</td>
							<td>
								<xsl:value-of select="TenHang"/>
							</td>
							<td>
								<xsl:value-of select="MaSo"/>
							</td>
							<td>
								<xsl:value-of select="DonViTinh"/>
							</td>
							<td>
								<xsl:value-of select="SoLuong/YeuCau"/>
							</td>
							<td>
								<xsl:value-of select="SoLuong/ThucXuat"/>
							</td>
							<td>
								<xsl:value-of select="DonGia"/>
							</td>
							<td>
								<xsl:value-of select="ThanhTien"/>
							</td>
						</tr>
					</xsl:for-each>
				</table>
					<p>
						Tổng Số Tiền: <xsl:value-of select="TongSoTien"/>
					</p>
					<p>
						Số Chứng Từ Gốc Kèm Theo: <xsl:value-of select="SoChungTuGocKemTheo"/>
					</p>
					<p>
						Ngày Xuất: <xsl:value-of select="NgayXuat"/>
					</p>
				</xsl:for-each>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>
