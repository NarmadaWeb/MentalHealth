"""
Generator Diagram MentalHealth
==============================
Menghasilkan semua file .drawio untuk proyek MentalHealth,
mengikuti standar akademik monochrome dan auto-routing yang rapi.
"""
import os
import xml.etree.ElementTree as ET
import xml.dom.minidom as minidom

BASE_DIR = "/var/home/indra12/skripsi/MentalHealth/diagram"
FLOW_ADMIN = os.path.join(BASE_DIR, "flowchart/admin")
FLOW_PG = os.path.join(BASE_DIR, "flowchart/pengguna")
FLOW_MAIN = os.path.join(BASE_DIR, "flowchart")
ACT_ADMIN = os.path.join(BASE_DIR, "activity/admin")
ACT_PG = os.path.join(BASE_DIR, "activity/pengguna")

for d in (FLOW_ADMIN, FLOW_PG, FLOW_MAIN, ACT_ADMIN, ACT_PG):
    os.makedirs(d, exist_ok=True)


def write_diagram(diagram_elem, filepath, pretty=True):
    """Tulis satu diagram ke file .drawio dengan formatting rapi."""
    mxfile = ET.Element("mxfile", host="Electron", version="21.6.8",
                        modified="2026-06-05T00:00:00.000Z",
                        agent="Mozilla/5.0", type="device")
    mxfile.append(diagram_elem)
    raw = ET.tostring(mxfile, encoding="utf-8")
    if pretty:
        dom = minidom.parseString(raw)
        pretty_xml = dom.toprettyxml(indent="  ")
        if pretty_xml.startswith("<?xml"):
            pretty_xml = pretty_xml.split("\n", 1)[1]
        out = '<?xml version="1.0" encoding="UTF-8"?>\n' + pretty_xml
    else:
        out = b'<?xml version="1.0" encoding="UTF-8"?>\n' + raw
    with open(filepath, "w", encoding="utf-8") as f:
        f.write(out)
    print(f"  -> {filepath}")


class FlowchartBuilder:
    """Bangun flowchart dengan style konsisten monochrome."""

    ST_START = "rounded=1;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=2;fontColor=#000000;fontStyle=1;fontSize=12;"
    ST_END = "rounded=1;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=2;fontColor=#000000;fontStyle=1;fontSize=12;"
    ST_PROC = "rounded=1;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontSize=12;"
    ST_PROC_RECT = "rounded=0;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontSize=12;"
    ST_INPUT = "shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontSize=12;"
    ST_OUTPUT = "shape=parallelogram;perimeter=parallelogramPerimeter;whiteSpace=wrap;html=1;fixedSize=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontSize=12;"
    ST_DEC = "strokeWidth=2;html=1;shape=mxgraph.flowchart.decision;whiteSpace=wrap;fillColor=#FFFFFF;strokeColor=#000000;fontColor=#000000;fontSize=12;"
    ST_OFFPG = "shape=offPageConnector;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=2;fontSize=12;align=center;verticalAlign=middle;fontColor=#000000;"
    ST_DATA = "shape=note;whiteSpace=wrap;html=1;backgroundOutline=1;darkOpacity=0.05;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.2;fontColor=#000000;fontSize=11;align=left;verticalAlign=top;"
    ST_CYL = "shape=cylinder3;whiteSpace=wrap;html=1;boundedLbl=1;backgroundOutline=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontSize=12;size=10;"

    EDGE_BASE = "edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontSize=11;labelBackgroundColor=#FFFFFF;"

    def __init__(self, name, page_id, page_w=850, page_h=900):
        self.name = name
        self.page_id = page_id
        self.page_w = page_w
        self.page_h = page_h
        self.counter = 0
        self.nodes = []
        self.edges = []
        self.titles = []

    def _next_id(self, prefix):
        self.counter += 1
        return f"{prefix}{self.counter}"

    def add(self, nid, label, kind, x, y, w=None, h=None, parent="1"):
        if kind == "start":
            w = w or 120
            h = h or 50
            style = self.ST_START
        elif kind == "end":
            w = w or 120
            h = h or 50
            style = self.ST_END
        elif kind == "process":
            w = w or 160
            h = h or 55
            style = self.ST_PROC
        elif kind == "process_rect":
            w = w or 160
            h = h or 55
            style = self.ST_PROC_RECT
        elif kind == "input":
            w = w or 175
            h = h or 55
            style = self.ST_INPUT
        elif kind == "output":
            w = w or 175
            h = h or 55
            style = self.ST_OUTPUT
        elif kind == "decision":
            w = w or 110
            h = h or 80
            style = self.ST_DEC
        elif kind == "offpage":
            w = w or 100
            h = h or 70
            style = self.ST_OFFPG
        elif kind == "data":
            w = w or 200
            h = h or 80
            style = self.ST_DATA
        elif kind == "cylinder":
            w = w or 140
            h = h or 60
            style = self.ST_CYL
        elif kind == "connector":
            w = w or 40
            h = h or 45
            style = "shape=offPageConnector;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;strokeWidth=1.5;fontColor=#000000;fontStyle=1;fontSize=12;"
        else:
            w = w or 150
            h = h or 50
            style = self.ST_PROC
        self.nodes.append({
            "id": nid, "value": label, "style": style,
            "x": x, "y": y, "w": w, "h": h, "parent": parent
        })

    def add_title(self, label, x=20, y=10, w=500, h=24):
        pass

    def link(self, src, dst, label="", exit_pt=(0.5, 1), entry_pt=(0.5, 0), points=None, style_override=None):
        eid = self._next_id("e")
        style = style_override or self.EDGE_BASE
        style += f"exitX={exit_pt[0]};exitY={exit_pt[1]};exitDx=0;exitDy=0;entryX={entry_pt[0]};entryY={entry_pt[1]};entryDx=0;entryDy=0;"
        self.edges.append({
            "id": eid, "value": label, "style": style,
            "source": src, "target": dst, "points": points or []
        })

    def build(self):
        diagram = ET.Element("diagram", id=self.page_id, name=self.name)
        model = ET.SubElement(diagram, "mxGraphModel", dx="1000", dy="1000", grid="1", gridSize="10", guides="1", tooltips="1", connect="1", arrows="1", fold="1", page="1", pageScale="1", pageWidth=str(self.page_w), pageHeight=str(self.page_h), math="0", shadow="0")
        root = ET.SubElement(model, "root")
        ET.SubElement(root, "mxCell", id="0")
        ET.SubElement(root, "mxCell", id="1", parent="0")

        frame = ET.SubElement(root, "mxCell", id="frame", value="", style="fillColor=none;strokeColor=none;pointerEvents=0;", vertex="1", parent="1")
        frame_geom = ET.SubElement(frame, "mxGeometry", x="0", y="0", width=str(self.page_w), height=str(self.page_h))
        frame_geom.set("as", "geometry")

        for t in self.titles:
            cell = ET.SubElement(root, "mxCell", id=t["id"], value=t["value"], style="text;html=1;align=left;verticalAlign=middle;whiteSpace=wrap;rounded=0;fontSize=14;fontStyle=1;fontColor=#000000;", vertex="1", parent="1")
            geom = ET.SubElement(cell, "mxGeometry", x=str(t["x"]), y=str(t["y"]), width=str(t["w"]), height=str(t["h"]))
            geom.set("as", "geometry")

        for n in self.nodes:
            cell = ET.SubElement(root, "mxCell", id=n["id"], value=n["value"], style=n["style"], vertex="1", parent=n["parent"])
            geom = ET.SubElement(cell, "mxGeometry", x=str(n["x"]), y=str(n["y"]), width=str(n["w"]), height=str(n["h"]))
            geom.set("as", "geometry")

        for e in self.edges:
            cell = ET.SubElement(root, "mxCell", id=e["id"], value=e["value"], style=e["style"], edge="1", parent="1", source=e["source"], target=e["target"])
            geom = ET.SubElement(cell, "mxGeometry", relative="1")
            geom.set("as", "geometry")
            if e["points"]:
                arr = ET.SubElement(geom, "Array")
                arr.set("as", "points")
                for (px, py) in e["points"]:
                    ET.SubElement(arr, "mxPoint", x=str(px), y=str(py))
        return diagram


class ActivityBuilder:
    """Diagram aktivitas dengan swimlanes."""

    ST_START = "ellipse;html=1;fillColor=#000000;strokeColor=none;aspect=fixed;"
    ST_FINAL = "ellipse;html=1;fillColor=none;strokeColor=#000000;strokeWidth=2;aspect=fixed;"
    ST_FINAL_INNER = "ellipse;html=1;fillColor=#000000;strokeColor=none;aspect=fixed;"
    ST_ACTION = "rounded=1;whiteSpace=wrap;html=1;arcSize=20;fillColor=#FFFFFF;strokeColor=#000000;fontSize=12;fontColor=#000000;align=center;verticalAlign=middle;strokeWidth=1.5;"
    ST_DEC = "rhombus;whiteSpace=wrap;html=1;fillColor=#FFFFFF;strokeColor=#000000;fontSize=12;fontColor=#000000;align=center;verticalAlign=middle;strokeWidth=1.5;"
    ST_LANE = "swimlane;startSize=30;html=1;whiteSpace=wrap;collapsible=0;connectable=0;container=1;pointerEvents=0;fillColor=none;strokeColor=#000000;fontStyle=1;align=center;fontSize=13;fontColor=#000000;strokeWidth=1.5;"
    EDGE_BASE = "edgeStyle=orthogonalEdgeStyle;rounded=0;orthogonalLoop=1;jettySize=auto;html=1;strokeColor=#000000;strokeWidth=1.5;fontSize=12;labelBackgroundColor=#FFFFFF;fontColor=#000000;"

    DIR_COORDS = {
        "bottom": (0.5, 1),
        "top": (0.5, 0),
        "left": (0, 0.5),
        "right": (1, 0.5),
    }

    def __init__(self, name, page_id, lane_left, lane_right, page_w=800, page_h=1000):
        self.name = name
        self.page_id = page_id
        self.lane_left = lane_left
        self.lane_right = lane_right
        self.page_w = page_w
        self.page_h = page_h
        self.counter = 0
        self.cells = []
        self.edges = []

    def _next_id(self, prefix="n"):
        self.counter += 1
        return f"{prefix}{self.counter}"

    def add(self, nid, label, kind, lane, y, x_offset=0):
        cx = 210 if lane == "left" else 550
        if kind == "start":
            w, h = 30, 30
            x = cx - 15 + x_offset
            self._push(nid, "", self.ST_START, x, y, w, h)
        elif kind == "final":
            w, h = 30, 30
            x = cx - 15 + x_offset
            self._push(nid, "", self.ST_FINAL, x, y, w, h)
            self._push(nid + "_in", "", self.ST_FINAL_INNER, x + 7, y + 7, 16, 16)
        elif kind == "action":
            w, h = 200, 55
            x = cx - 100 + x_offset
            self._push(nid, label, self.ST_ACTION, x, y, w, h)
        elif kind == "decision":
            w, h = 120, 75
            x = cx - 60 + x_offset
            self._push(nid, label, self.ST_DEC, x, y, w, h)

    def _push(self, nid, value, style, x, y, w, h):
        self.cells.append({
            "id": nid, "value": value, "style": style,
            "x": x, "y": y, "w": w, "h": h
        })

    def link(self, src, dst, label="", exit_dir="bottom", entry_dir="top", points=None):
        eid = self._next_id("e")
        ex, ey = self.DIR_COORDS[exit_dir]
        enx, eny = self.DIR_COORDS[entry_dir]
        style = self.EDGE_BASE + f"exitX={ex};exitY={ey};exitDx=0;exitDy=0;entryX={enx};entryY={eny};entryDx=0;entryDy=0;"

        if not points:
            points = []
            source_cell = next((c for c in self.cells if c["id"] == src), None)
            target_cell = next((c for c in self.cells if c["id"] == dst), None)
            if source_cell and target_cell:
                x1, y1, w1, h1 = source_cell["x"], source_cell["y"], source_cell["w"], source_cell["h"]
                x2, y2, w2, h2 = target_cell["x"], target_cell["y"], target_cell["w"], target_cell["h"]
                cx1, cy1 = x1 + w1 / 2, y1 + h1 / 2
                cx2, cy2 = x2 + w2 / 2, y2 + h2 / 2

                if abs(cx1 - cx2) > 50:
                    if exit_dir == "bottom" and entry_dir == "top":
                        ymid = (y1 + h1 + y2) / 2
                        points = [(cx1, ymid), (cx2, ymid)]
                    elif (exit_dir == "right" and entry_dir == "left") or (exit_dir == "left" and entry_dir == "right"):
                        if abs(cy1 - cy2) > 10:
                            xmid = 380
                            points = [(xmid, cy1), (xmid, cy2)]
                else:
                    if y2 < y1:
                        if exit_dir == "left" and entry_dir == "left":
                            x_loop = 90 if cx1 < 380 else 430
                            points = [(x_loop, cy1), (x_loop, cy2)]
                        elif exit_dir == "right" and entry_dir == "right":
                            x_loop = 330 if cx1 < 380 else 670
                            points = [(x_loop, cy1), (x_loop, cy2)]

        self.edges.append({
            "id": eid, "value": label, "style": style,
            "source": src, "target": dst, "points": points
        })

    def build(self):
        diagram = ET.Element("diagram", id=self.page_id, name=self.name)
        model = ET.SubElement(diagram, "mxGraphModel", dx="1000", dy="1000", grid="1", gridSize="10", guides="1", tooltips="1", connect="1", arrows="1", fold="1", page="1", pageScale="1", pageWidth=str(self.page_w), pageHeight=str(self.page_h), math="0", shadow="0")
        root = ET.SubElement(model, "root")
        ET.SubElement(root, "mxCell", id="0")
        ET.SubElement(root, "mxCell", id="1", parent="0")

        frame = ET.SubElement(root, "mxCell", id="frame", value="", style="fillColor=none;strokeColor=none;pointerEvents=0;", vertex="1", parent="1")
        frame_geom = ET.SubElement(frame, "mxGeometry", x="0", y="0", width=str(self.page_w), height=str(self.page_h))
        frame_geom.set("as", "geometry")

        ET.SubElement(root, "mxCell", id="lane_left", value=self.lane_left, style=self.ST_LANE, vertex="1", parent="1")
        lane_left_geom = ET.SubElement(root[-1], "mxGeometry", x="60", y="40", width="300", height=str(self.page_h - 80))
        lane_left_geom.set("as", "geometry")

        ET.SubElement(root, "mxCell", id="lane_right", value=self.lane_right, style=self.ST_LANE, vertex="1", parent="1")
        lane_right_geom = ET.SubElement(root[-1], "mxGeometry", x="400", y="40", width="300", height=str(self.page_h - 80))
        lane_right_geom.set("as", "geometry")

        for c in self.cells:
            cell = ET.SubElement(root, "mxCell", id=c["id"], value=c["value"], style=c["style"], vertex="1", parent="1")
            geom = ET.SubElement(cell, "mxGeometry", x=str(c["x"]), y=str(c["y"]), width=str(c["w"]), height=str(c["h"]))
            geom.set("as", "geometry")
        for e in self.edges:
            cell = ET.SubElement(root, "mxCell", id=e["id"], value=e["value"], style=e["style"], edge="1", parent="1", source=e["source"], target=e["target"])
            geom = ET.SubElement(cell, "mxGeometry", relative="1")
            geom.set("as", "geometry")
            if e["points"]:
                arr = ET.SubElement(geom, "Array")
                arr.set("as", "points")
                for (px, py) in e["points"]:
                    ET.SubElement(arr, "mxPoint", x=str(px), y=str(py))
        return diagram


# ============================================================
# FLOWCHARTS GENERATOR FUNCTIONS
# ============================================================

def flow_sistem_lama():
    f = FlowchartBuilder("Flowchart Sistem Lama", "flow-sistem-lama", page_w=800, page_h=800)
    f.add_title("Flowchart Sistem Lama (Skrining Manual)")
    f.add("start", "Mulai", "start", 240, 50, 120, 50)
    f.add("feel", "Pengguna merasa terganggu\nkesehatan mentalnya", "process", 220, 130, 160, 55)
    f.add("go", "Datang ke psikolog / klinik\natau mencari kuesioner", "process", 220, 210, 160, 55)
    f.add("fill", "Mengisi lembar kuesioner\nDASS secara manual", "input", 212, 290, 175, 55)
    f.add("calc", "Menghitung total skor\njawaban secara manual", "process", 220, 370, 160, 55)
    f.add("check", "Mencocokkan skor dengan\ntabel klasifikasi manual", "process", 220, 450, 160, 55)
    f.add("get", "Menerima hasil klasifikasi\ndan rekomendasi tertulis", "input", 212, 530, 175, 55)
    f.add("end", "Selesai", "end", 240, 610, 120, 50)

    f.link("start", "feel")
    f.link("feel", "go")
    f.link("go", "fill")
    f.link("fill", "calc")
    f.link("calc", "check")
    f.link("check", "get")
    f.link("get", "end")
    return f.build()


def flow_sistem_baru():
    f = FlowchartBuilder("Flowchart Sistem Baru", "flow-sistem-baru", page_w=800, page_h=900)
    f.add_title("Flowchart Sistem Baru (Website MentalHealth)")
    f.add("start", "Mulai", "start", 240, 50, 120, 50)
    f.add("feel", "Pengguna merasa terganggu\nkesehatan mentalnya", "process", 220, 130, 160, 55)
    f.add("access", "Mengakses website\nMentalHealth", "process", 220, 210, 160, 55)
    f.add("fill", "Mengisi kuesioner DASS\nsecara online pada web", "input", 212, 290, 175, 55)
    f.add("calc", "Sistem menghitung skor\n& menentukan tingkat keparahan", "process", 220, 370, 160, 55)
    f.add("show", "Sistem menampilkan hasil\ndan rekomendasi di layar", "input", 212, 450, 175, 55)
    f.add("relax", "Mengakses Pusat Ketenangan\nuntuk relaksasi mandiri", "process", 220, 530, 160, 55)
    f.add("end", "Selesai", "end", 240, 610, 120, 50)

    f.link("start", "feel")
    f.link("feel", "access")
    f.link("access", "fill")
    f.link("fill", "calc")
    f.link("calc", "show")
    f.link("show", "relax")
    f.link("relax", "end")
    return f.build()


def flow_login_admin():
    f = FlowchartBuilder("Flowchart Login Admin", "flow-login-admin", page_w=800, page_h=900)
    f.add_title("Flowchart Login Admin - MentalHealth")
    f.add("start", "Mulai", "start", 240, 50, 120, 50)
    f.add("page", "Buka Halaman Login Admin\n(admin/login.php)", "process", 220, 130, 160, 55)
    f.add("input", "Input Username\ndan Password", "input", 212, 210, 175, 55)
    f.add("validate", "Mencocokkan dengan\ndata admin_users di DB", "process", 220, 290, 160, 55)
    f.add("check", "Kredensial\nValid?", "decision", 245, 370, 110, 80)
    f.add("err", "Tampilkan pesan error\n\"Username/password salah\"", "process", 430, 382, 160, 55)
    f.add("session", "Membuat session admin\ndan redirect ke /admin", "process", 220, 490, 160, 55)
    f.add("dashboard", "Tampil Halaman Dashboard\n(admin/index.php)", "process", 220, 570, 160, 55)
    f.add("end", "Selesai", "end", 240, 650, 120, 50)

    f.link("start", "page")
    f.link("page", "input")
    f.link("input", "validate")
    f.link("validate", "check")
    f.link("check", "err", label="Tidak", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("err", "input", exit_pt=(1, 0.5), entry_pt=(1, 0.5), points=[(630, 409.5), (630, 237.5)])
    f.link("check", "session", label="Ya", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    f.link("session", "dashboard")
    f.link("dashboard", "end")
    return f.build()


def flow_logout_admin():
    f = FlowchartBuilder("Flowchart Logout Admin", "flow-logout-admin", page_w=800, page_h=800)
    f.add_title("Flowchart Logout Admin - MentalHealth")
    f.add("start", "Mulai", "start", 240, 50, 120, 50)
    f.add("dash", "Halaman Dashboard Admin", "offpage", 250, 130, 100, 70)
    f.add("klik", "Klik Tombol Logout", "process", 220, 230, 160, 55)
    f.add("destroy", "Sistem Menghapus Session", "process_rect", 220, 315, 160, 55)
    f.add("redirect", "Redirect ke Halaman Login", "process", 220, 400, 160, 55)
    f.add("end", "Selesai", "end", 240, 485, 120, 50)

    f.link("start", "dash")
    f.link("dash", "klik")
    f.link("klik", "destroy")
    f.link("destroy", "redirect")
    f.link("redirect", "end")
    return f.build()


def flow_kelola_gejala():
    f = FlowchartBuilder("Flowchart Kelola Gejala", "flow-kelola-gejala", page_w=1180, page_h=900)
    f.add_title("Flowchart Kelola Data Gejala (DASS) - MentalHealth")

    f.add("start", "Halaman Kelola Gejala", "offpage", 100, 30, 80, 50)
    f.add("tampil", "Tampil Data Gejala DASS\n(admin/index.php)", "input", 60, 120, 160, 55)

    # Tambah Data
    f.add("d_t", "Tambah\nGejala?", "decision", 65, 220, 150, 80)
    f.add("form_t", "Tampil Form Tambah\n(admin/tambah.php)", "input", 290, 230, 160, 55)
    f.add("in_t", "Input Pertanyaan,\nKategori, & Urutan", "input", 510, 230, 160, 55)
    f.add("simpan_t", "Simpan?", "decision", 725, 222, 130, 70)
    f.add("ok_t", "Data Berhasil Disimpan\ndan Redirect ke /admin", "input", 920, 230, 160, 55)

    # Ubah Data
    f.add("d_e", "Ubah\nGejala?", "decision", 65, 355, 150, 80)
    f.add("form_e", "Tampil Form Ubah\n(admin/edit.php)", "input", 290, 365, 160, 55)
    f.add("in_e", "Ubah Pertanyaan,\nKategori, & Urutan", "input", 510, 365, 160, 55)
    f.add("simpan_e", "Simpan?", "decision", 725, 357, 130, 70)
    f.add("ok_e", "Data Berhasil Diubah\ndan Redirect ke /admin", "input", 920, 365, 160, 55)

    # Hapus Data
    f.add("d_d", "Hapus\nGejala?", "decision", 65, 490, 150, 80)
    f.add("form_d", "Tampil Konfirmasi Hapus\n(Alert Dialog)", "process_rect", 290, 500, 160, 55)
    f.add("ok_d", "Data Dihapus dari DB\ndan Redirect ke /admin", "input", 510, 500, 160, 55)

    f.add("dashboard", "Dashboard Admin", "offpage", 100, 620, 80, 50)

    # Links
    f.link("start", "tampil")
    f.link("tampil", "d_t")
    f.link("d_t", "form_t", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("d_t", "d_e", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    f.link("form_t", "in_t")
    f.link("in_t", "simpan_t")
    f.link("simpan_t", "ok_t", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("simpan_t", "form_t", label="Tidak", exit_pt=(0.5, 0), entry_pt=(0.5, 0), points=[(790, 210), (370, 210)])
    f.link("ok_t", "tampil", exit_pt=(1, 0.5), entry_pt=(1, 0.5), points=[(1120, 257.5), (1120, 148)])

    f.link("d_e", "form_e", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("d_e", "d_d", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    f.link("form_e", "in_e")
    f.link("in_e", "simpan_e")
    f.link("simpan_e", "ok_e", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("simpan_e", "form_e", label="Tidak", exit_pt=(0.5, 0), entry_pt=(0.5, 0), points=[(790, 345), (370, 345)])
    f.link("ok_e", "tampil", exit_pt=(1, 0.5), entry_pt=(1, 0.5), points=[(1120, 392.5), (1120, 148)])

    f.link("d_d", "form_d", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("d_d", "dashboard", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    f.link("form_d", "ok_d")
    f.link("ok_d", "tampil", exit_pt=(1, 0.5), entry_pt=(1, 0.5), points=[(1120, 527.5), (1120, 148)])
    return f.build()


def flow_tes_mandiri():
    f = FlowchartBuilder("Flowchart Tes Mandiri", "flow-tes-mandiri", page_w=800, page_h=900)
    f.add("start", "Mulai", "start", 240, 50, 120, 50)
    f.add("page", "Halaman Tes Mandiri\n(tes-mandiri.php)", "offpage", 260, 130, 80, 80)
    f.add("loop", "Pertanyaan DASS ke-i\n(i = 1 s/d 21)", "process", 220, 240, 160, 55)
    f.add("input", "Pilih skala jawaban\n(0, 1, 2, atau 3)", "input", 212.5, 330, 175, 55)
    f.add("check", "Apakah i = 21?", "decision", 245, 420, 110, 80)
    f.add("inc", "i = i + 1", "process", 430, 432.5, 120, 55)
    f.add("submit", "Klik tombol\n\"Kirim Hasil\"", "input", 212.5, 530, 175, 55)
    f.add("calc", "Sistem menghitung total skor\nDepresi, Kecemasan, & Stres", "process", 220, 610, 160, 55)
    f.add("show", "Halaman Hasil Tes\n(hasil.php)", "offpage", 260, 695, 80, 80)
    f.add("end", "Selesai", "end", 240, 800, 120, 50)

    f.link("start", "page")
    f.link("page", "loop")
    f.link("loop", "input")
    f.link("input", "check")
    f.link("check", "inc", label="Tidak", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("inc", "loop", exit_pt=(1, 0.5), entry_pt=(1, 0.5), points=[(580, 460), (580, 267.5)])
    f.link("check", "submit", label="Ya", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    f.link("submit", "calc")
    f.link("calc", "show")
    f.link("show", "end")
    return f.build()


def flow_pusat_ketenangan():
    f = FlowchartBuilder("Flowchart Pusat Ketenangan", "flow-pusat-ketenangan", page_w=900, page_h=900)
    f.add("start", "Mulai", "start", 390, 40, 120, 50)
    f.add("page", "Halaman Pusat Ketenangan\n(pusat-ketenangan.php)", "offpage", 410, 120, 80, 80)
    f.add("tampil", "Tampil Pilihan Relaksasi\n(Bento Grid)", "input", 370, 230, 160, 55)
    f.add("pilih", "Pilih Latihan?", "decision", 390, 320, 120, 80)

    f.add("bernapas", "Latihan Pernapasan\n(Bernapas Bersama)", "process", 150, 430, 160, 55)
    f.add("start_breath", "Klik 'Mulai Latihan'", "input", 150, 515, 160, 55)
    f.add("anim", "Sistem Animasi Breathing\nCircle (Inhale-Hold-Exhale)", "process_rect", 150, 600, 160, 55)
    f.add("afirmasi", "Tampil Afirmasi Ketenangan", "input", 150, 685, 160, 55)

    f.add("grounding", "Teknik Grounding\n5-4-3-2-1", "process", 370, 430, 160, 55)
    f.add("read_ground", "Membaca & Melatih Indrawi", "process", 370, 515, 160, 55)

    f.add("call_darurat", "Layanan Kontak Darurat\n(Butuh Teman Bicara?)", "process", 590, 430, 160, 55)
    f.add("click_contact", "Klik Link Kontak Darurat", "input", 590, 515, 160, 55)
    f.add("redirect_chat", "Halaman Dialing/Chatting\n(Kontak Darurat)", "offpage", 630, 600, 80, 80)

    f.add("end", "Selesai", "end", 390, 810, 120, 50)

    f.link("start", "page")
    f.link("page", "tampil")
    f.link("tampil", "pilih")

    f.link("pilih", "bernapas", label="Pernapasan", exit_pt=(0, 0.5), entry_pt=(0.5, 0), points=[(230, 360)])
    f.link("bernapas", "start_breath")
    f.link("start_breath", "anim")
    f.link("anim", "afirmasi")
    f.link("afirmasi", "end", exit_pt=(0.5, 1), entry_pt=(0, 0.5), points=[(230, 835)])

    f.link("pilih", "grounding", label="Grounding", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    f.link("grounding", "read_ground")
    f.link("read_ground", "end", exit_pt=(0.5, 1), entry_pt=(0.5, 0))

    f.link("pilih", "call_darurat", label="Kontak", exit_pt=(1, 0.5), entry_pt=(0.5, 0), points=[(670, 360)])
    f.link("call_darurat", "click_contact")
    f.link("click_contact", "redirect_chat")
    f.link("redirect_chat", "end", exit_pt=(0.5, 1), entry_pt=(1, 0.5), points=[(670, 835)])
    return f.build()


def flow_navigasi_pengguna():
    f = FlowchartBuilder("Flowchart Navigasi Pengguna", "flow-navigasi-pengguna", page_w=800, page_h=950)
    f.add("start", "Mulai", "start", 240, 50, 120, 50)
    f.add("home", "Halaman Beranda\n(home.php)", "offpage", 260, 130, 80, 80)
    
    # Decisions & Target Pages (Off-Page Connectors)
    f.add("dec_tes", "Pilih Menu\nTes Mandiri?", "decision", 245, 240, 110, 80)
    f.add("page_tes", "Halaman\nTes Mandiri", "offpage", 430, 240, 80, 80)
    
    f.add("dec_relax", "Pilih Menu\nPusat Ketenangan?", "decision", 245, 360, 110, 80)
    f.add("page_relax", "Halaman\nPusat Ketenangan", "offpage", 430, 360, 80, 80)
    
    f.add("dec_about", "Pilih Menu\nTentang Kami?", "decision", 245, 480, 110, 80)
    f.add("page_about", "Halaman\nTentang Kami", "offpage", 430, 480, 80, 80)
    
    f.add("dec_contact", "Pilih Menu\nKontak Darurat?", "decision", 245, 600, 110, 80)
    f.add("page_contact", "Halaman\nKontak Darurat", "offpage", 430, 600, 80, 80)
    
    f.add("dec_privacy", "Pilih Menu\nKebijakan Privasi?", "decision", 245, 720, 110, 80)
    f.add("page_privacy", "Halaman\nKebijakan Privasi", "offpage", 430, 720, 80, 80)
    
    f.add("end", "Selesai", "end", 240, 850, 120, 50)
    
    # Links
    f.link("start", "home")
    f.link("home", "dec_tes")
    
    f.link("dec_tes", "page_tes", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("dec_tes", "dec_relax", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    f.link("dec_relax", "page_relax", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("dec_relax", "dec_about", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    f.link("dec_about", "page_about", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("dec_about", "dec_contact", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    f.link("dec_contact", "page_contact", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("dec_contact", "dec_privacy", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    f.link("dec_privacy", "page_privacy", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("dec_privacy", "end", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    return f.build()


def flow_navigasi_admin():
    f = FlowchartBuilder("Flowchart Navigasi Admin", "flow-navigasi-admin", page_w=800, page_h=600)
    f.add("start", "Mulai", "start", 240, 50, 120, 50)
    f.add("dashboard", "Halaman Dashboard Admin\n(admin/index.php)", "offpage", 260, 130, 80, 80)
    
    # Decisions & Target Pages (Off-Page Connectors)
    f.add("dec_dataset", "Pilih Menu\nKelola Gejala?", "decision", 245, 240, 110, 80)
    f.add("page_dataset", "Halaman\nKelola Gejala", "offpage", 430, 240, 80, 80)
    
    f.add("dec_logout", "Pilih Menu\nLogout?", "decision", 245, 360, 110, 80)
    f.add("page_logout", "Halaman Login\n(Logout)", "offpage", 430, 360, 80, 80)
    
    f.add("end", "Selesai", "end", 240, 480, 120, 50)
    
    # Links
    f.link("start", "dashboard")
    f.link("dashboard", "dec_dataset")
    
    f.link("dec_dataset", "page_dataset", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("dec_dataset", "dec_logout", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    f.link("dec_logout", "page_logout", label="Ya", exit_pt=(1, 0.5), entry_pt=(0, 0.5))
    f.link("dec_logout", "end", label="Tidak", exit_pt=(0.5, 1), entry_pt=(0.5, 0))
    
    return f.build()


# ============================================================
# ACTIVITY DIAGRAM GENERATOR FUNCTIONS
# ============================================================

def act_login_admin():
    a = ActivityBuilder("Activity Login Admin", "act-login-admin", "Admin", "Sistem", page_w=800, page_h=900)
    a.add("start", "", "start", "left", 70)
    a.add("go_page", "Mengakses halaman\nLogin Admin", "action", "left", 130)
    a.add("show_form", "Menampilkan form login", "action", "right", 130)
    a.add("input", "Mengisi username, password\ndan klik \"Masuk\"", "action", "left", 220)
    a.add("validate", "Memvalidasi kredensial\ndengan database", "action", "right", 220)
    a.add("check", "Valid?", "decision", "right", 310)
    a.add("err", "Menampilkan pesan error\n\"Username/password salah\"", "action", "right", 420)
    a.add("session", "Membuat session admin\ndan redirect ke dashboard", "action", "right", 520)
    a.add("view_dash", "Melihat Dashboard Admin\n(Daftar Gejala)", "action", "left", 520)
    a.add("final", "", "final", "left", 640)

    a.link("start", "go_page")
    a.link("go_page", "show_form", exit_dir="right", entry_dir="left")
    a.link("show_form", "input", exit_dir="bottom", entry_dir="top", points=[(550, 195), (210, 195)])
    a.link("input", "validate", exit_dir="right", entry_dir="left")
    a.link("validate", "check")
    a.link("check", "err", label="Tidak", exit_dir="right", entry_dir="top", points=[(630, 347.5), (630, 395), (550, 395)])
    a.link("err", "input", exit_dir="left", entry_dir="left", points=[(90, 447.5), (90, 247.5)])
    a.link("check", "session", label="Ya", exit_dir="bottom", entry_dir="top")
    a.link("session", "view_dash", exit_dir="left", entry_dir="right")
    a.link("view_dash", "final")
    return a.build()


def act_logout_admin():
    a = ActivityBuilder("Activity Logout Admin", "act-logout-admin", "Admin", "Sistem", page_w=800, page_h=600)
    a.add("start", "", "start", "left", 70)
    a.add("klik", "Klik tombol Logout", "action", "left", 130)
    a.add("destroy", "Menghapus session admin", "action", "right", 130)
    a.add("redirect", "Redirect ke halaman\nLogin Admin", "action", "right", 220)
    a.add("show_login", "Menampilkan halaman\nLogin Admin", "action", "left", 220)
    a.add("final", "", "final", "left", 320)

    a.link("start", "klik")
    a.link("klik", "destroy", exit_dir="right", entry_dir="left")
    a.link("destroy", "redirect")
    a.link("redirect", "show_login", exit_dir="left", entry_dir="right")
    a.link("show_login", "final")
    return a.build()


def act_kelola_gejala():
    a = ActivityBuilder("Activity Kelola Gejala", "act-kelola-gejala", "Admin", "Sistem", page_w=800, page_h=1050)
    a.add("start", "", "start", "left", 70)
    a.add("go_menu", "Mengakses menu\nKelola Gejala", "action", "left", 120)
    a.add("req_data", "Request data pertanyaan\ndari database", "action", "right", 120)
    a.add("show_table", "Menampilkan daftar\npertanyaan di dashboard", "action", "right", 210)
    a.add("choose_act", "Memilih tindakan\n(Tambah / Edit / Hapus)", "action", "left", 300)
    a.add("dec_act", "Pilih\nTindakan?", "decision", "left", 390)

    a.add("t_form", "Isi form tambah data\n& klik Simpan", "action", "left", 510)
    a.add("t_val", "Validasi input & simpan\nke database (INSERT)", "action", "right", 510)

    a.add("e_form", "Isi form edit data\n& klik Simpan", "action", "left", 620)
    a.add("e_val", "Validasi input & simpan\nperubahan (UPDATE)", "action", "right", 620)

    a.add("d_form", "Klik tombol Hapus &\nkonfirmasi tindakan", "action", "left", 730)
    a.add("d_val", "Hapus data dari\ndatabase (DELETE)", "action", "right", 730)

    a.add("show_ok", "Tampilkan pesan sukses\ndan refresh tabel", "action", "right", 840)
    a.add("final", "", "final", "left", 950)

    a.link("start", "go_menu")
    a.link("go_menu", "req_data", exit_dir="right", entry_dir="left")
    a.link("req_data", "show_table")
    a.link("show_table", "choose_act", exit_dir="left", entry_dir="right")
    a.link("choose_act", "dec_act")

    a.link("dec_act", "t_form", label="Tambah", exit_dir="left", entry_dir="top", points=[(90, 427.5), (90, 485), (210, 485)])
    a.link("dec_act", "e_form", label="Edit", exit_dir="bottom", entry_dir="top")
    a.link("dec_act", "d_form", label="Hapus", exit_dir="right", entry_dir="top", points=[(330, 427.5), (330, 705), (210, 705)])

    a.link("t_form", "t_val", exit_dir="right", entry_dir="left")
    a.link("e_form", "e_val", exit_dir="right", entry_dir="left")
    a.link("d_form", "d_val", exit_dir="right", entry_dir="left")

    a.link("t_val", "show_ok", exit_dir="right", entry_dir="top", points=[(670, 537.5), (670, 815), (550, 815)])
    a.link("e_val", "show_ok", exit_dir="right", entry_dir="top", points=[(670, 647.5), (670, 815), (550, 815)])
    a.link("d_val", "show_ok")

    a.link("show_ok", "final", exit_dir="left", entry_dir="right")
    return a.build()


def act_tes_mandiri():
    a = ActivityBuilder("Activity Tes Mandiri", "act-tes-mandiri", "Pengguna", "Sistem", page_w=800, page_h=900)
    a.add("start", "", "start", "left", 70)
    a.add("buka", "Membuka halaman tes\n(tes-mandiri.php)", "action", "left", 130)
    a.add("tampil", "Menampilkan halaman\nskrining awal", "action", "right", 130)
    a.add("mulai", "Klik tombol\n\"Mulai Skrining Sekarang\"", "action", "left", 220)
    a.add("load_q", "Memuat 21 pertanyaan\ndari database", "action", "right", 220)
    a.add("isi", "Mengisi kuesioner dengan\npilihan skala 0 s/d 3", "action", "left", 310)
    a.add("kirim", "Klik tombol \"Kirim Hasil\"", "action", "left", 400)
    a.add("hitung", "Menghitung total skor & determine\ntingkat keparahan (DASS)", "action", "right", 400)
    a.add("save", "Menyimpan hasil ke session\n& redirect ke hasil.php", "action", "right", 490)
    a.add("show_hasil", "Menampilkan hasil skrining\ndan rekomendasi solusi", "action", "right", 580)
    a.add("lihat", "Melihat hasil klasifikasi\ndan rekomendasi ketenangan", "action", "left", 580)
    a.add("final", "", "final", "left", 690)

    a.link("start", "buka")
    a.link("buka", "tampil", exit_dir="right", entry_dir="left")
    a.link("tampil", "mulai", exit_dir="bottom", entry_dir="top", points=[(550, 195), (210, 195)])
    a.link("mulai", "load_q", exit_dir="right", entry_dir="left")
    a.link("load_q", "isi", exit_dir="bottom", entry_dir="top", points=[(550, 285), (210, 285)])
    a.link("isi", "kirim")
    a.link("kirim", "hitung", exit_dir="right", entry_dir="left")
    a.link("hitung", "save")
    a.link("save", "show_hasil")
    a.link("show_hasil", "lihat", exit_dir="left", entry_dir="right")
    a.link("lihat", "final")
    return a.build()


def act_pusat_ketenangan():
    a = ActivityBuilder("Activity Pusat Ketenangan", "act-pusat-ketenangan", "Pengguna", "Sistem", page_w=800, page_h=1000)
    a.add("start", "", "start", "left", 70)
    a.add("buka", "Akses Pusat Ketenangan\n(pusat-ketenangan.php)", "action", "left", 135)
    a.add("tampil", "Menampilkan menu relaksasi\ndan visual bento grid", "action", "right", 135)
    a.add("pilih", "Memilih Latihan?", "decision", "left", 225)

    a.add("breath_start", "Klik 'Mulai Latihan'\ndi Latihan Pernapasan", "action", "left", 340)
    a.add("breath_anim", "Menjalankan animasi visual\nbreathing circle (10s/cycle)", "action", "right", 340)
    a.add("breath_afirmasi", "Menampilkan afirmasi\nketenangan setelah 5 siklus", "action", "right", 430)
    a.add("breath_read", "Membaca pesan afirmasi\ndan merasa rileks", "action", "left", 430)

    a.add("grounding_read", "Mengikuti teknik grounding\nindrawi 5-4-3-2-1 di layar", "action", "left", 540)

    a.add("darurat_click", "Mengakses Layanan Kontak\nDarurat (Butuh Teman Bicara?)", "action", "left", 650)
    a.add("darurat_sys", "Redirect ke chat konseling /\ndialing Layanan Sejiwa 119", "action", "right", 650)

    a.add("final", "", "final", "left", 780)

    a.link("start", "buka")
    a.link("buka", "tampil", exit_dir="right", entry_dir="left")
    a.link("tampil", "pilih", exit_dir="bottom", entry_dir="top", points=[(550, 200), (210, 200)])

    a.link("pilih", "breath_start", label="Pernapasan", exit_dir="left", entry_dir="top", points=[(90, 262.5), (90, 310), (210, 310)])
    a.link("pilih", "grounding_read", label="Grounding", exit_dir="bottom", entry_dir="top")
    a.link("pilih", "darurat_click", label="Kontak", exit_dir="right", entry_dir="top", points=[(330, 262.5), (330, 620), (210, 620)])

    a.link("breath_start", "breath_anim", exit_dir="right", entry_dir="left")
    a.link("breath_anim", "breath_afirmasi")
    a.link("breath_afirmasi", "breath_read", exit_dir="left", entry_dir="right")

    a.link("breath_read", "final", exit_dir="bottom", entry_dir="top", points=[(90, 485), (90, 755), (210, 755)])
    a.link("grounding_read", "final", exit_dir="bottom", entry_dir="top", points=[(330, 595), (330, 755), (210, 755)])
    a.link("darurat_click", "darurat_sys", exit_dir="right", entry_dir="left")
    a.link("darurat_sys", "final", exit_dir="bottom", entry_dir="top", points=[(550, 755), (210, 755)])
    return a.build()


# ============================================================
# MAIN INVOCATION
# ============================================================

if __name__ == "__main__":
    print("Mulai pembuatan diagram...")

    # 1. Flowcharts
    # write_diagram(flow_sistem_lama(), os.path.join(FLOW_MAIN, "05-flowchart-sistem-lama.drawio"))
    # write_diagram(flow_sistem_baru(), os.path.join(FLOW_MAIN, "06-flowchart-sistem-baru.drawio"))
    # write_diagram(flow_login_admin(), os.path.join(FLOW_ADMIN, "flowchart-login-admin.drawio"))
    # write_diagram(flow_logout_admin(), os.path.join(FLOW_ADMIN, "flowchart-logout-admin.drawio"))
    write_diagram(flow_kelola_gejala(), os.path.join(FLOW_ADMIN, "flowchart-kelola-gejala.drawio"))
    write_diagram(flow_tes_mandiri(), os.path.join(FLOW_PG, "flowchart-tes-mandiri.drawio"))
    write_diagram(flow_pusat_ketenangan(), os.path.join(FLOW_PG, "flowchart-pusat-ketenangan.drawio"))
    
    # New Navigation Flowcharts
    write_diagram(flow_navigasi_pengguna(), os.path.join(FLOW_PG, "flowchart-navigasi-pengguna.drawio"))
    write_diagram(flow_navigasi_admin(), os.path.join(FLOW_ADMIN, "flowchart-navigasi-admin.drawio"))

    # 2. Activity Diagrams
    # write_diagram(act_login_admin(), os.path.join(ACT_ADMIN, "activity-login-admin.drawio"))
    # write_diagram(act_logout_admin(), os.path.join(ACT_ADMIN, "activity-logout-admin.drawio"))
    write_diagram(act_kelola_gejala(), os.path.join(ACT_ADMIN, "activity-kelola-gejala.drawio"))
    # write_diagram(act_tes_mandiri(), os.path.join(ACT_PG, "activity-tes-mandiri.drawio"))
    # write_diagram(act_pusat_ketenangan(), os.path.join(ACT_PG, "activity-pusat-ketenangan.drawio"))

    print("Selesai membuat diagram!")
