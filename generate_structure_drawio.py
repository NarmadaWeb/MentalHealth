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
                            modified="2026-06-05T13:20:00.000Z",
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

        # Ensure directory exists
        os.makedirs(os.path.dirname(filepath), exist_ok=True)
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(out_content)

def main():
    builder = DrawioBuilder("Struktur Program", "struktur-page-id", width=850, height=700)

    # Styles
    st_root = "rounded=1;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=2.5;fontStyle=1;fontColor=#000000;fontSize=13;align=center;"
    st_folder = "rounded=1;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=2;fontStyle=1;fontColor=#000000;fontSize=12;align=center;"
    st_file = "rounded=0;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.2;fontColor=#000000;fontSize=11;align=center;"

    # Root Node
    builder.add_node("root_dir", "MentalHealth/", st_root, 335, 20, 180, 40)

    # Level 1 Folders
    builder.add_node("f_components", "components/", st_folder, 60, 120, 150, 40)
    builder.add_node("f_admin", "admin/", st_folder, 260, 120, 150, 40)
    builder.add_node("f_root_files", "Root Files / Berkas Utama", st_folder, 525, 120, 240, 40)

    # Link Root to Level 1
    builder.link_nodes("root_dir", "f_components", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("root_dir", "f_admin", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    builder.link_nodes("root_dir", "f_root_files", exit_pt=(0.5, 1), entry_pt=(0.5, 0))

    # components files
    comp_files = [
        ("c_navbar", "navbar.php"),
        ("c_footer", "footer.php")
    ]
    for i, (fid, name) in enumerate(comp_files):
        builder.add_node(fid, name, st_file, 65, 200 + (i * 45), 140, 35)
        # Link from parent folder
        if i == 0:
            builder.link_nodes("f_components", fid, exit_pt=(0.5, 1), entry_pt=(0.5, 0))
        else:
            builder.link_nodes(comp_files[i-1][0], fid, exit_pt=(0.5, 1), entry_pt=(0.5, 0))

    # admin files
    admin_files = [
        ("a_auth", "auth.php"),
        ("a_login", "login.php"),
        ("a_index", "index.php"),
        ("a_tambah", "tambah.php"),
        ("a_edit", "edit.php"),
        ("a_hapus", "hapus.php"),
        ("a_logout", "logout.php")
    ]
    for i, (fid, name) in enumerate(admin_files):
        builder.add_node(fid, name, st_file, 265, 200 + (i * 45), 140, 35)
        # Link from parent folder
        if i == 0:
            builder.link_nodes("f_admin", fid, exit_pt=(0.5, 1), entry_pt=(0.5, 0))
        else:
            builder.link_nodes(admin_files[i-1][0], fid, exit_pt=(0.5, 1), entry_pt=(0.5, 0))

    # root files Column 1
    root_col1 = [
        ("r_index", "index.php"),
        ("r_home", "home.php"),
        ("r_tes_mandiri", "tes-mandiri.php"),
        ("r_tes", "tes.php"),
        ("r_hasil", "hasil.php"),
        ("r_pusat", "pusat-ketenangan.php")
    ]
    for i, (fid, name) in enumerate(root_col1):
        builder.add_node(fid, name, st_file, 480, 200 + (i * 45), 140, 35)
        if i == 0:
            # Link from parent folder to Col 1 first element
            builder.link_nodes("f_root_files", fid, exit_pt=(0.25, 1), entry_pt=(0.5, 0))
        else:
            builder.link_nodes(root_col1[i-1][0], fid, exit_pt=(0.5, 1), entry_pt=(0.5, 0))

    # root files Column 2
    root_col2 = [
        ("r_kontak", "kontak-darurat.php"),
        ("r_tentang", "tentang-kami.php"),
        ("r_db", "db.php"),
        ("r_data", "data_dass21.php"),
        ("r_setup", "setup_db.php"),
        ("r_syarat", "syarat-ketentuan.php"),
        ("r_privasi", "kebijakan-privasi.php")
    ]
    for i, (fid, name) in enumerate(root_col2):
        builder.add_node(fid, name, st_file, 650, 200 + (i * 45), 140, 35)
        if i == 0:
            # Link from parent folder to Col 2 first element
            builder.link_nodes("f_root_files", fid, exit_pt=(0.75, 1), entry_pt=(0.5, 0))
        else:
            builder.link_nodes(root_col2[i-1][0], fid, exit_pt=(0.5, 1), entry_pt=(0.5, 0))

    # Save to diagram/program/struktur.drawio
    builder.save("diagram/program/struktur.drawio")
    print("diagram/program/struktur.drawio created successfully!")

if __name__ == "__main__":
    main()
