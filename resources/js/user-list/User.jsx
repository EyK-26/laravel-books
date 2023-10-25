import deleteIcon from "/public/delete.png";

export default function User({ name, email, id, onDelete }) {
    const handleClick = () => {
        onDelete(id);
    };

    return (
        <div className="user-list__user">
            <div className="user-list__user-info">
                <div className="user-list__name">{name}</div>
                <div className="user-list__email">{email}</div>
            </div>
            <div className="user-list__user-actions">
                <a href="">
                    <img
                        src={deleteIcon}
                        alt="delete"
                        title="delete"
                        onClick={handleClick}
                    />
                </a>
            </div>
        </div>
    );
}
