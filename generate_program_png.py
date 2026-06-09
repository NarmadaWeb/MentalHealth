import os
import math
from PIL import Image, ImageDraw, ImageFont

def get_font(font_name="DejaVuSans", size=11):
    paths = [
        f"/usr/share/fonts/dejavu/DejaVuSans.ttf",
        f"/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf",
        f"/usr/share/fonts/liberation/LiberationSans-Regular.ttf",
        f"/usr/share/fonts/google-droid-sans-fonts/DroidSans.ttf",
        f"/usr/share/fonts/liberation-sans/LiberationSans-Regular.ttf",
        f"/usr/share/fonts/adwaita-sans-fonts/AdwaitaSans-Regular.ttf",
    ]
    for path in paths:
        if os.path.exists(path):
            try:
                return ImageFont.truetype(path, size)
            except:
                pass
    return ImageFont.load_default()

def draw_arrow(draw, start, end, width=2, arrow_size=8):
    draw.line([start, end], fill="black", width=width)
    x1, y1 = start
    x2, y2 = end
    angle = math.atan2(y2 - y1, x2 - x1)
    p1 = (int(x2 - arrow_size * math.cos(angle - math.pi/6)),
          int(y2 - arrow_size * math.sin(angle - math.pi/6)))
    p2 = (int(x2 - arrow_size * math.cos(angle + math.pi/6)),
          int(y2 - arrow_size * math.sin(angle + math.pi/6)))
    draw.polygon([end, p1, p2], fill="black")

def draw_node(draw, text, x, y, w, h, font, rx=4):
    draw.rounded_rectangle([x, y, x + w, y + h], radius=rx, fill="white", outline="black", width=2)
    lines = text.split('\n')
    line_heights = [font.getbbox(line)[3] - font.getbbox(line)[1] for line in lines]
    total_text_height = sum(line_heights) + (len(lines) - 1) * 3
    
    current_y = y + (h - total_text_height) // 2
    for line in lines:
        tw = font.getbbox(line)[2] - font.getbbox(line)[0]
        draw.text((x + (w - tw) // 2, int(current_y)), line, fill="black", font=font)
        current_y += font.getbbox(line)[3] - font.getbbox(line)[1] + 3

def draw_admin_png():
    width, height = 800, 360
    img = Image.new("RGB", (width, height), "white")
    draw = ImageDraw.Draw(img)
    font = get_font(size=12)
    
    # 1. Login Admin
    draw_node(draw, "Login Admin", 325, 30, 150, 45, font)
    
    # 2. Dashboard Admin
    draw_node(draw, "Dashboard Admin\n(admin/index.php)", 310, 120, 180, 50, font)
    
    # Links Login -> Dashboard
    draw_arrow(draw, (400, 75), (400, 120))
    
    # 3. Bottom menus
    menus = [
        ("Tampil Data\nGejala", 40, 250, 120, 50),
        ("Tambah\nGejala", 190, 250, 120, 50),
        ("Edit\nGejala", 340, 250, 120, 50),
        ("Hapus\nGejala", 490, 250, 120, 50),
        ("Logout Admin", 640, 250, 120, 50),
    ]
    
    # Orthogonal bus line
    draw.line([(400, 170), (400, 210)], fill="black", width=2)
    draw.line([(100, 210), (700, 210)], fill="black", width=2)
    
    # Draw menus and vertical drop arrows
    for name, mx, my, mw, mh in menus:
        draw_node(draw, name, mx, my, mw, mh, font)
        cx = mx + mw // 2
        draw_arrow(draw, (cx, 210), (cx, my))
        
    os.makedirs("diagram/program", exist_ok=True)
    img.save("diagram/program/arsitektur_program.png")
    print("Saved: diagram/program/arsitektur_program.png")

def main():
    draw_admin_png()
    
    # Pengguna
    width, height = 1000, 360
    img = Image.new("RGB", (width, height), "white")
    draw = ImageDraw.Draw(img)
    font = get_font(size=11)
    
    # Beranda
    draw_node(draw, "Beranda\n(home.php)", 410, 30, 180, 50, font)
    
    # Menus
    menus = [
        ("Tes Mandiri\n(tes.php)", 30, 150, 130, 50),
        ("Pusat Ketenangan\n(pusat-ketenangan.php)", 180, 150, 165, 50),
        ("Kontak Darurat\n(kontak-darurat.php)", 365, 150, 155, 50),
        ("Tentang Kami\n(tentang-kami.php)", 540, 150, 140, 50),
        ("Syarat & Ketentuan\n(syarat-ketentuan.php)", 700, 150, 150, 50),
        ("Kebijakan Privasi\n(kebijakan-privasi.php)", 870, 150, 150, 50),
    ]
    
    # Links Beranda -> Menus
    draw.line([(500, 80), (500, 115)], fill="black", width=2)
    draw.line([(95, 115), (945, 115)], fill="black", width=2)
    
    for name, mx, my, mw, mh in menus:
        draw_node(draw, name, mx, my, mw, mh, font)
        cx = mx + mw // 2
        draw_arrow(draw, (cx, 115), (cx, my))
        
    # Sub-node under Tes Mandiri
    draw_node(draw, "Hasil Skrining\n(hasil.php)", 30, 250, 130, 50, font)
    draw_arrow(draw, (95, 200), (95, 250))
    
    os.makedirs("diagram/program", exist_ok=True)
    img.save("diagram/program/pengguna_progran.png")
    print("Saved: diagram/program/pengguna_progran.png")

if __name__ == "__main__":
    main()
