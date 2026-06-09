import os
import xml.etree.ElementTree as ET
import xml.dom.minidom as minidom

class DrawioBuilder:
    def __init__(self, name, page_id, width=850, height=700):
        self.name = name
        self.page_id = page_id
        self.width = width
        self.height = height
        self.nodes = []
        self.edges = []
        self.counter = 0

    def _next_id(self, prefix):
        self.counter += 1
        return f"{prefix}{self.counter}"

    def add_node(self, nid, label, style, x, y, w, h):
        self.nodes.append({
            "id": nid, "value": label, "style": style,
            "x": x, "y": y, "w": w, "h": h
        })

    def link_nodes(self, src, dst, label="", exit_pt=(0.5, 1), entry_pt=(0.5, 0)):
        style = ("edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;"
                 "jettySize=auto;html=1;strokeColor=#000000;strokeWidth=1.2;"
                 "fontColor=#000000;fontSize=10;labelBackgroundColor=#FFFFFF;")
        style += f"exitX={exit_pt[0]};exitY={exit_pt[1]};exitDx=0;exitDy=0;"
        style += f"entryX={entry_pt[0]};entryY={entry_pt[1]};entryDx=0;entryDy=0;"
        self.edges.append({
            "id": self._next_id("e"), "value": label, "style": style,
            "source": src, "target": dst
        })

    def save(self, filepath):
        mxfile = ET.Element("mxfile", host="Electron", version="21.6.8",
                            modified="2026-06-05T13:23:00.000Z",
                            agent="Mozilla/5.0", type="device")
        diagram = ET.SubElement(mxfile, "diagram", id=self.page_id, name=self.name)
        model = ET.SubElement(diagram, "mxGraphModel",
                              dx="1000", dy="1000", grid="1", gridSize="10",
                              guides="1", tooltips="1", connect="1", arrows="1",
                              fold="1", page="1", pageScale="1",
                              pageWidth=str(self.width), pageHeight=str(self.height),
                              math="0", shadow="0")
        root = ET.SubElement(model, "root")
        
        ET.SubElement(root, "mxCell", id="0")
        ET.SubElement(root, "mxCell", id="1", parent="0")

        # Add nodes
        for n in self.nodes:
            cell = ET.SubElement(root, "mxCell", id=n["id"], value=n["value"],
                                 style=n["style"], vertex="1", parent="1")
            geom = ET.SubElement(cell, "mxGeometry",
                                 x=str(n["x"]), y=str(n["y"]),
                                 width=str(n["w"]), height=str(n["h"]))
            geom.set("as", "geometry")

        # Add edges
        for e in self.edges:
            cell = ET.SubElement(root, "mxCell", id=e["id"], value=e["value"],
                                 style=e["style"], edge="1", parent="1",
                                 source=e["source"], target=e["target"])
            geom = ET.SubElement(cell, "mxGeometry", relative="1")
            geom.set("as", "geometry")

        raw = ET.tostring(mxfile, encoding="utf-8")
        dom = minidom.parseString(raw)
        pretty_xml = dom.toprettyxml(indent="  ")
        if pretty_xml.startswith("<?xml"):
            pretty_xml = pretty_xml.split("\n", 1)[1]
        out_content = '<?xml version="1.0" encoding="UTF-8"?>\n' + pretty_xml

        os.makedirs(os.path.dirname(filepath), exist_ok=True)
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(out_content)
        print(f"Saved: {filepath}")

def build_admin_arch():
    builder = DrawioBuilder("Arsitektur Program Admin", "arch-admin-page", width=850, height=500)
    
    st_node = "whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontSize=13;align=center;"
    
    # Nodes
    builder.add_node("login", "Login Admin", st_node, 365, 40, 120, 40)
    builder.add_node("dashboard", "Dashboard\nAdmin", st_node, 345, 140, 160, 50)
    
    # Sub menus
    builder.add_node("m_tampil", "Tampil Data\nGejala", st_node, 40, 270, 120, 45)
    builder.add_node("m_tambah", "Tambah\nGejala", st_node, 195, 270, 120, 45)
    builder.add_node("m_edit", "Edit\nGejala", st_node, 350, 270, 120, 45)
    builder.add_node("m_hapus", "Hapus\nGejala", st_node, 505, 270, 120, 45)
    builder.add_node("m_logout", "Logout Admin", st_node, 660, 270, 120, 45)
    
    # Links
    builder.link_nodes("login", "dashboard")
    builder.link_nodes("dashboard", "m_tampil", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("dashboard", "m_tambah", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("dashboard", "m_edit", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("dashboard", "m_hapus", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("dashboard", "m_logout", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    builder.save("diagram/program/arsitektur_program.drawio")

def build_pengguna_arch():
    builder = DrawioBuilder("Arsitektur Program Pengguna", "arch-pengguna-page", width=850, height=500)
    
    st_node = "whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontSize=13;align=center;"
    
    # Nodes
    builder.add_node("home", "Beranda\n(home.php)", st_node, 345, 40, 160, 45)
    
    # Sub menus
    builder.add_node("m_tes", "Tes Mandiri\n(tes.php)", st_node, 40, 160, 110, 45)
    builder.add_node("m_pusat", "Pusat Ketenangan\n(pusat-ketenangan.php)", st_node, 165, 160, 145, 45)
    builder.add_node("m_kontak", "Kontak Darurat\n(kontak-darurat.php)", st_node, 325, 160, 135, 45)
    builder.add_node("m_tentang", "Tentang Kami\n(tentang-kami.php)", st_node, 475, 160, 125, 45)
    builder.add_node("m_syarat", "Syarat & Ketentuan\n(syarat-ketentuan.php)", st_node, 615, 160, 140, 45)
    builder.add_node("m_privasi", "Kebijakan Privasi\n(kebijakan-privasi.php)", st_node, 770, 160, 140, 45)
    
    # Child of Tes Mandiri
    builder.add_node("m_hasil", "Hasil Skrining\n(hasil.php)", st_node, 40, 260, 110, 45)
    
    # Links
    builder.link_nodes("home", "m_tes", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("home", "m_pusat", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("home", "m_kontak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("home", "m_tentang", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("home", "m_syarat", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("home", "m_privasi", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    builder.link_nodes("m_tes", "m_hasil", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    builder.save("diagram/program/pengguna_progran.drawio")

if __name__ == "__main__":
    build_admin_arch()
    build_pengguna_arch()
