import os
import datetime

#作成するディレクトリのpathを指定
max_study_index = 15

# ディレクトリ一覧取得
dir_list = os.listdir('./')

for i in range(1, max_study_index + 1):
    # dir_listにiで「始まる」ディレクトリがあるかどうかを判定する
    study_index = i
    if any([d for d in dir_list if d.startswith(f'{i:02}_')]):
        print(f'{i:02}_が既に存在します。')
    else:
        print(f'{i:02}_が存在しません。')
        break
    if i == max_study_index:
        print("すべてのディレクトリが存在します。")
        exit()

# 日付を取得する
today = datetime.datetime.now()
today_str = today.strftime('%Y-%m-%d')

make_dir_path = f'./{study_index:02}_{today_str}/'

os.makedirs(make_dir_path)

# .gitkeepファイルを作成する
with open(f'{make_dir_path}.gitkeep', 'w') as f:
    print(f'{make_dir_path}.gitkeepを作成しました。')

